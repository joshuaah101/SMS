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

Route::prefix('school')->group(function () {
    Route::get('/', 'SchoolController@index')->name('school');
    Route::get('/{slug}', 'SchoolController@show')->name('school.show');
});
