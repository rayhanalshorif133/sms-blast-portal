<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SendSMSController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::prefix('send-sms')
    ->controller(SendSMSController::class)
    ->name('send-sms.')
    ->group(function () {
        Route::get('/single','singelSms')->name('single');
    });
