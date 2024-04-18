<?php

use App\Http\Controllers\AccountDeleteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthenticateMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});





Route::middleware([AuthenticateMiddleware::class, 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // password.confirm fortify middleware
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/update-password', [ProfileController::class, 'updatePasswordPage'])->name('update_password');
    Route::get('/delete-account', [ProfileController::class, 'deleteAccountPage'])->name('delete.account');
    Route::post('/delete-account', [ProfileController::class, 'deleteAccountConfirm'])->name('delete.account');
});