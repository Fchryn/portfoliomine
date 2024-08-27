<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [\App\Http\Controllers\MainUserController::class, 'AlreadyRegister'])->name('user.register');
