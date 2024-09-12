<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::view('/admin', 'pages.admin.home.pages')->name('admin.view');
Route::get('/google/redirect', [\App\Http\Controllers\HomeController::class, 'redirect'])->name('google.redirect');
//Route::get('/google/callback', [\App\Http\Controllers\HomeController::class, 'callback'])->name('google.callback');

Route::get('/terminal', [\App\Http\Controllers\TerminalController::class, 'terminal']);
Route::post('/execute-command1', [\App\Http\Controllers\TerminalController::class, 'execute1']);
Route::post('/execute-command2', [\App\Http\Controllers\TerminalController::class, 'execute2']);
//Route::post('/start-chili-detection', [TerminalController::class, 'startChiliDetection']);
//Route::post('/stop-chili-detection', [TerminalController::class, 'stopChiliDetection']);

//Route::get('/terminal', [RaspiCntdController::class, 'terminal']);
//Route::post('/execute-command', [RaspiCntdController::class, 'execute']);

Route::get('/forgotpass', [\App\Http\Controllers\MainUserController::class, 'forgotPassword']);
//Route::get('/newpass', [\App\Http\Controllers\MainUserController::class, 'newPassword']);

Route::get('/newpass/{id}', [\App\Http\Controllers\MainUserController::class, 'newPassword'])->name('newpass.view');

Route::view('/register', 'pages.auth.register');
Route::view('/login', 'pages.auth.login')->name('login.view');
Route::view('/newpass', 'pages.auth.newpass')->name('newpass.view');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'about']);
Route::get('/mycertificates', [\App\Http\Controllers\AboutController::class, 'mycertificates']);
Route::get('/mypapers', [\App\Http\Controllers\AboutController::class, 'mypapers']);

Route::group(['prefix' => 'myprojects', 'as' => 'myprojects.'], function () {
    Route::get('/', [\App\Http\Controllers\AboutController::class, 'myprojects']);
    Route::get('/{id}', [\App\Http\Controllers\AboutController::class, 'detailprojects']);
});

Route::group(['prefix' => 'contact', 'as' => 'contact.'], function () {
    Route::get('/', [\App\Http\Controllers\ContactController::class, 'index']);
    Route::post('/', [\App\Http\Controllers\ContactController::class, 'insert']);
});

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [\App\Http\Controllers\adminController::class, 'home'])->name('admin.view');
    Route::get('/add', [\App\Http\Controllers\adminController::class, 'Addhome'])->name('Addhome.view');
    Route::get('/edit', [\App\Http\Controllers\adminController::class, 'Edithome'])->name('Edithome.view');
    Route::get('/about', [\App\Http\Controllers\adminController::class, 'about'])->name('about.view');
    Route::get('/about/add', [\App\Http\Controllers\adminController::class, 'Addabout'])->name('Addabout.view');
    Route::get('/about/edit', [\App\Http\Controllers\adminController::class, 'Editabout'])->name('Editabout.view');
    Route::get('/contact', [\App\Http\Controllers\adminController::class, 'contact'])->name('contact.view');
    Route::get('/contact/add', [\App\Http\Controllers\adminController::class, 'Addcontact'])->name('Addcontact.view');
    Route::get('/contact/edit', [\App\Http\Controllers\adminController::class, 'Editcontact'])->name('Editcontact.view');
});



