<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use Modules\Student\Http\Controllers\Auth\LoginController;
use Modules\Student\Http\Controllers\Auth\RegisterController;

Route::prefix('student')->group(function () {
    Route::get('/', 'StudentController@index')->name('student');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('student.login');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('student.register');


    Route::post('/login', [LoginController::class, 'login'])->name('student.login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('student.logout');
    Route::post('/register', [RegisterController::class, 'register'])->name('student.register');
});


