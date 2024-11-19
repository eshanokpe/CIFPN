<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\ContactFormController;
use App\Http\Controllers\Admin\SolutionsController;
use App\Http\Controllers\Admin\CoreActivitiesController; 

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
require __DIR__.'/portal.php';

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/{page}', [PagesController::class, 'index'])->name('home.pages');

Route::get('coreActivities/{slug}', [CoreActivitiesController::class, 'show'])->name('coreActivities-details');
 
Route::get('/membership-login', [LoginController::class, 'showLogin'])->name('membership.signin');
Route::post('/membership-login-post', [LoginController::class, 'loginnn'])->name('membership');
  
Route::get('/membership-signup', [LoginController::class, 'showSignup'])->name('membership.signup');


Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('home.privacyPolicy');
Route::get('/contact-us', [FrontendController::class, 'AboutUS'])->name('contact.submit');
Route::post('/membership-logout', [LoginController::class, 'logout'])->name('membership.logout');
Route::get('/membership/logout', [HomeController::class, 'logout'])->name('membership.logout');
Route::get('/membership/login', [PagesController::class, 'membershipLogin'])->name('membership.login');
Auth::routes(['verify' => true]);

Route::get('/membership/dashboard', [HomeController::class, 'index'])->name('membership.dashboard');

Auth::routes(); 

