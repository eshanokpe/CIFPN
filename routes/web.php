<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\SolutionsController;
use App\Http\Controllers\Admin\IndustriesController; 

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
Route::get('/solutions/{slug}', [SolutionsController::class, 'show'])->name('solutions.detail');
Route::get('industries/{slug}', [IndustriesController::class, 'show'])->name('industries.detail');

 
Route::post('/contact-submit', [ContactFormController::class, 'store'])->name('contact.submit');


Auth::routes(); 

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
