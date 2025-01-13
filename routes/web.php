<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectManagerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::group(['prefix' => 'auth'], function () {
    // Authentication Routes
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    
    // Password Reset Routes
    Route::get('forgot-password', [LoginController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('password/email', [LoginController::class, 'sendResetLinkEmail'])->name('password.email');
    
    // Registration Routes
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
});

Route::get('/', function () {
    return view('auth.login');
});

// Admin Routes
Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
   
});

// Project Manager Routes
Route::group(['middleware' => ['role:client'], 'prefix' => 'client'], function () {
    Route::get('/dashboard', [ClientController::class, 'index'])->name('client.dashboard');
 
});

// Staff Routes (e.g., Developer)
Route::group(['middleware' => ['role:seller'], 'prefix' => 'staff'], function () {
    Route::get('/dashboard', [SellerController::class, 'index'])->name('seller.dashboard');
  
});
