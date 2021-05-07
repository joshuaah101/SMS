<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;



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

Route::get('/', [PagesController::class , 'homepage'])->name('/');
Route::get('/payment', [PagesController::class , 'payment'])->name('payment');
Route::get('/portal', [PagesController::class , 'portal'])->name('portal');
Route::get('/check-status', [PagesController::class , 'check_status'])->name('check-status');

Auth::routes();


Route::get('/home', [HomeController::class, 'index']);
