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
    Route::get('/', [AdmissionsController::class, 'index']);
    Route::get('/admission', [AdmissionsController::class, 'showAdmissionPage'])->name('admission');
    Route::get('/admission/registration', [AdmissionsController::class, 'showRegistrationPage'])->name('admission.registration');
    Route::get('/admission/bio-data', [AdmissionsController::class, 'showBioDataPage'])->name('admission.bio_data');
    Route::get('/admission/preview', [AdmissionsController::class, 'showPreviewPage'])->name('admission.preview');
});