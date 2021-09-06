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

Route::prefix('staff')->group(function () {
    Route::get('/', 'StaffController@index')->name('staff');
    Route::get('/login', [\Modules\Staff\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('staff.login');
    Route::get('/register', [\Modules\Staff\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('staff.register');
});

