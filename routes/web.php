<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
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

Route::post('/toggle-favorite', [ProductController::class, 'toggleFavorite'])->name('toggle-favorite');

// Admin Routes
Route::group(['middleware' => ['role:admin'], 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
   
});

// Client Manager Routes
Route::group(['middleware' => ['role:client'], 'prefix' => 'client'], function () {
    Route::get('/dashboard', [ClientController::class, 'index'])->name('client.dashboard');


    // product 
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::post('/products/{productId}/reviews', [ProductController::class, 'storeReview'])->name('reviews.store');
Route::delete('/reviews/{reviewId}', [ProductController::class, 'destroyReview'])->name('reviews.destroy');
// Route::post('/products/toggle-favorite', [ProductController::class, 'toggleFavorite'])->name('products.toggleFavorite');
 
});

// Staff Routes (e.g., Developer)
Route::group(['middleware' => ['role:seller'], 'prefix' => 'seller'], function () {
    Route::get('/dashboard', [SellerController::class, 'index'])->name('seller.dashboard');
  
});
