<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApplicationForm;
use App\Models\Transaction;

class PaymentController extends Controller
{
    
    public function handleCallback(Request $request)
    {
        try {
            
            $trxref = $request->query('trxref');  
            $reference = $request->query('reference');
           
            if (!$trxref || !$reference) {
                return redirect()->back()->with('error', 'Missing required parameters.');
            }

            $application = ApplicationForm::where('reference', $reference)->first();
            $transaction = Transaction::where('transaction_reference', $reference)->first();
            $paymentOption = $application->payment_option;
            if (!$application) {
                return redirect()->back()->with('error', 'Application not found.');
            }

            if ($paymentOption === 'paystack') {
                $this->handlePaystackCallback($application, $transaction);
            } elseif ($paymentOption === 'moniepoint') {
                $this->verifyMoniepointPayment($application, $transaction);
            } elseif ($paymentOption === 'opay') {
                $this->verifyOpayPayment($application, $transaction);
            } else {
                return redirect()->back()->with('error', 'Invalid payment option.');
            }
            return redirect()->back()->with('success', 'Callback processed successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to process callback'.$e->getMessage());
        }
    }

   
    private function handlePaystackCallback($application, $transaction)
    {
        try {
            $paystack = new \Yabacon\Paystack(env('PAYSTACK_SECRET_KEY'));
            $response = $paystack->transaction->verify(['reference' => $application->reference]);
    
            if ($response->data->status === 'success') {
                $transaction->update([
                    'status' => 'completed',
                ]);
                $application->update(['payment_status' => 'completed']);
                return redirect()->back()->with('success', 'Payment verified successfully.');
            }
            return redirect()->back()->with('error', 'Payment verification failed.');
        } catch (\Exception $e) {
            Log::error('Paystack verification error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Paystack verification failed'.$e->getMessage());
        }

    }
}
