<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/terminal', [\App\Http\Controllers\TerminalController::class, 'terminal']);
Route::post('/execute-command1', [\App\Http\Controllers\TerminalController::class, 'execute1']);
Route::post('/execute-command2', [\App\Http\Controllers\TerminalController::class, 'execute2']);
//Route::post('/start-chili-detection', [TerminalController::class, 'startChiliDetection']);
//Route::post('/stop-chili-detection', [TerminalController::class, 'stopChiliDetection']);

//Route::get('/terminal', [RaspiCntdController::class, 'terminal']);
//Route::post('/execute-command', [RaspiCntdController::class, 'execute']);

//Route::get('/register', [\App\Http\Controllers\MainUserController::class, 'register'])->name('register');
Route::get('/login', [\App\Http\Controllers\MainUserController::class, 'login'])->name('login');
Route::get('/forgotpass', [\App\Http\Controllers\MainUserController::class, 'forgotPassword'])->name('forgotPassword');

Route::view('/register', 'pages.auth.register')->name('register.view');

Route::view('/login', 'pages.auth.login')->name('login.view');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'about'])->name('about');
Route::get('/mycertificates', [\App\Http\Controllers\AboutController::class, 'mycertificates'])->name('mycertificates');
Route::get('/mypapers', [\App\Http\Controllers\AboutController::class, 'mypapers'])->name('mypapers');

Route::group(['prefix' => 'myprojects', 'as' => 'myprojects.'], function () {
    Route::get('/', [\App\Http\Controllers\AboutController::class, 'myprojects'])->name('myprojects');
    Route::get('/{id}', [\App\Http\Controllers\AboutController::class, 'detailprojects'])->name('detailprojects');
});

Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\ContactController::class, 'insert'])->name('insert');
});



