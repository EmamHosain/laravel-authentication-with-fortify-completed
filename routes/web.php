<?php

use App\Http\Controllers\AccountDeleteController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\AuthenticateMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(AuthenticateMiddleware::class,'verified');


// password.confirm fortify middleware
Route::post('/delete-account', [AccountDeleteController::class, 'deleteAccount'])->name('account.delete');
