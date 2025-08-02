<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\HomeController;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Password reset routes
Route::get('/forgot-password', [PasswordResetController::class, 'showForgotPassword'])->name('password.request');
Route::post('/forgot-password', [PasswordResetController::class, 'sendResetLink'])->name('password.email');
Route::get('/reset-password/{token}', [PasswordResetController::class, 'showResetPassword'])->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'resetPassword'])->name('password.update');

// Protected routes (require authentication)
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
});
