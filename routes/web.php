<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticationController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/verify-ci', 'verifyCi')->name('verify-ci');
    Route::get('/sign-up', 'signUp')->name('sign-up');
    Route::get('/sign-in', 'signIn')->name('sign-in');
});
