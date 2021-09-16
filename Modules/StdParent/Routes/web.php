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
use Modules\StdParent\Http\Controllers\Auth\ForgotPasswordController;
use Modules\StdParent\Http\Controllers\Auth\LoginController;
use Modules\StdParent\Http\Controllers\Auth\RegisterController;
use Modules\StdParent\Http\Controllers\Auth\ResetPasswordController;
use Modules\StdParent\Http\Controllers\Auth\VerificationController;

Route::prefix('parent')->group(function () {
    Route::get('/', 'StdParentController@index')->name('parent');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('parent.login');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('parent.register');
    Route::get('/password/request', [ResetPasswordController::class, 'showResetForm'])->name('parent.password.request');
    Route::get('/password/verify', [VerificationController::class, 'verify'])->name('parent.password.verify');
    Route::get('/password/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('parent.password.forgot');

});

