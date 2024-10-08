<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PagesController;

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


require __DIR__.'/admin.php';

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/{page}', [PagesController::class, 'index'])->name('home.pages');

Route::get('/about-us', [FrontendController::class, 'AboutUS'])->name('aboutus');
Route::get('/solutions', [FrontendController::class, 'Solutions'])->name('solutions');
Route::get('/solutions/details/{id}', [FrontendController::class, 'detailsSolutions'])->name('solutions.detail');
Route::get('/contact-us', [FrontendController::class, 'ContactUs'])->name('contactus');
Route::get('/industries', [FrontendController::class, 'Industries'])->name('industries');
Route::get('/social-impact', [FrontendController::class, 'SocialImpact'])->name('socialImpact');
Route::get('/careers', [FrontendController::class, 'Careers'])->name('careers');
Route::get('/appointment', [FrontendController::class, 'Appointment'])->name('appointment');


Auth::routes(); 

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
