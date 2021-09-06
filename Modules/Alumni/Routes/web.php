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
use Modules\Alumni\Http\Controllers\Auth\ForgotPasswordController;
use Modules\Alumni\Http\Controllers\Auth\LoginController;
use Modules\Alumni\Http\Controllers\Auth\ConfirmPasswordController;

Route::prefix('alumni')->group(function () {
    Route::get('/', 'AlumniController@index')->name('alumni');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('alumni.login');
    Route::get('/confirm-password', [ConfirmPasswordController::class, 'showConfirmForm'])->name('alumni.password.confirm');

    Route::get('/reset-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('alumni.password.reset');
});

