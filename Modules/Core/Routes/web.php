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
use Modules\Core\Http\Controllers\CoreController;
use Modules\Core\Http\Controllers\PortalController;

Route::get('/', [CoreController::class, 'index'])->name('homepage');
Route::get('/about', [CoreController::class, 'about'])->name('about');
Route::get('/terms-&-condition', [CoreController::class, 'terms'])->name('terms');
Route::get('/policy', [CoreController::class, 'policy'])->name('policy');
Route::get('/portal', [PortalController::class, 'index'])->name('portal');

