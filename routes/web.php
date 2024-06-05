<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/myprojects', [AboutController::class, 'myprojects'])->name('myprojects');
Route::get('/mycertificates', [AboutController::class, 'mycertificates'])->name('mycertificates');
Route::group(['prefix' => 'about', 'as' => 'about.'], function () {
    Route::get('/', [AboutController::class, 'index'])->name('index');
    Route::get('/{id}', [AboutController::class, 'detail'])->name('detail');
});

Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/', [ContactController::class, 'insert'])->name('insert');
});

Route::get('/coba_login', [AuthController::class, 'login'])->name('login');
Route::get('/coba_register', [AuthController::class, 'register'])->name('register');
Route::get('/coba_forgotpass', [AuthController::class, 'forgotpass'])->name('forgotpass');
Route::get('/coba_newpass', [AuthController::class, 'newpass'])->name('newpass');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

