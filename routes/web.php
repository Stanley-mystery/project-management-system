<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProjectManagerController;
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
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    
    // Password Reset Routes
    Route::get('forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
    Route::post('password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
    
    // Registration Routes
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
});

Route::get('/', function () {
    return view('auth.login');
});

// Admin Routes
Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
   
});

// Project Manager Routes
Route::group(['middleware' => ['role:project_manager'], 'prefix' => 'project-manager'], function () {
    Route::get('/dashboard', [ProjectManagerController::class, 'index'])->name('project_manager.dashboard');
 
});

// Staff Routes (e.g., Developer)
Route::group(['middleware' => ['role:staff'], 'prefix' => 'staff'], function () {
    Route::get('/dashboard', [StaffController::class, 'index'])->name('staff.dashboard');
  
});
