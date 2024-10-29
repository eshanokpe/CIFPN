<?php

namespace App\Mail;
use App\Models\Consultant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
 

class ConsultantMeeting extends Mailable
{
    use Queueable, SerializesModels;

    public $eventDetails;

    /**
     * Create a new message instance.
     *
     * @param array $eventDetails
     * @return void
     */
    public function __construct($eventDetails)
    {
        $this->eventDetails = $eventDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Consultant Meeting Created')
                    ->view('emails.creaste_consultant')
                    ->with('eventDetails', $this->eventDetails);
    }
}