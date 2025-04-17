<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});


Route::post('/register', [UserController::class, 'register'])
    ->name('register');

Route::post('/logout', [UserController::class, 'logout'])
    ->name('logout');