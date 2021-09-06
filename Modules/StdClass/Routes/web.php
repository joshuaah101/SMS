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
use Modules\StdClass\Http\Controllers\StdClassController;

Route::prefix('curriculum')->group(function () {
    Route::get('/', [StdClassController::class,'index'])->name('curriculum');
});


Route::prefix('admission')->group(function () {
    Route::get('/', 'StdClassController@admissions')->name('admission.index');
    Route::get('/{slug}', 'StdClassController@admissions')->name('admission.show');
});


