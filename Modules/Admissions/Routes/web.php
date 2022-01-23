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
use Modules\Admissions\Http\Controllers\AdmissionsController;

Route::prefix('admissions')->group(function() {
    Route::get('/', [AdmissionsController::class, 'index'])->name('admissions.index'); //admissions homepage
    Route::get('/registration', [AdmissionsController::class, 'showRegistrationPage'])->name('admissions.registration');
    Route::get('/bio-data', [AdmissionsController::class, 'showBioDataPage'])->name('admissions.bio_data');
    Route::get('/preview', [AdmissionsController::class, 'showPreviewPage'])->name('admissions.preview');
});