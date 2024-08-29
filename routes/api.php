<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/users', [\App\Http\Controllers\MainUserController::class, 'AlreadyRegister'])->name('api.register');
Route::post('/users/login', [\App\Http\Controllers\MainUserController::class, 'AlreadyLogin'])->name('api.login');
