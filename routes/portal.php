<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ApplicationController;
use App\Http\Controllers\User\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::prefix('membership')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('user.dashboard');
    Route::post('/application', [ApplicationController::class, 'store'])->name('application.submit');
    Route::get('/payment/callback', [PaymentController::class, 'handleCallback'])->name('payment.callback');

    Route::get('/transactions', [HomeController::class, 'transactions'])->name('user.transactions');
    
});

