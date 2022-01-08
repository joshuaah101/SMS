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
use Modules\StdParent\Http\Controllers\StdParentController;
use Modules\StdParent\Http\Controllers\Auth\ForgotPasswordController;
use Modules\StdParent\Http\Controllers\Auth\LoginController;
use Modules\StdParent\Http\Controllers\Auth\RegisterController;
use Modules\StdParent\Http\Controllers\Auth\ResetPasswordController;
use Modules\StdParent\Http\Controllers\Auth\VerificationController;

Route::prefix('parent')->group(function () {
    Route::get('/', [StdParentController::class, 'index'])->name('parent'); //parent homepage
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('parent.login');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('parent.register');
    Route::get('/password/request', [ResetPasswordController::class, 'showResetForm'])->name('parent.password.request');
    Route::get('/password/verify', [VerificationController::class, 'verify'])->name('parent.password.verify');
    Route::get('/password/forgot', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('parent.password.forgot');
    Route::get('/admission', [StdParentController::class, 'showAdmissionPage'])->name('parent.admission');
    Route::get('/admission/registration', [StdParentController::class, 'showRegistrationPage'])->name('parent.admission.registration');
    Route::get('/admission/bio-data', [StdParentController::class, 'showBioDataPage'])->name('parent.admission.bio_data');
    Route::get('/admission/preview', [StdParentController::class, 'showPreviewPage'])->name('parent.admission.preview');
    

    //show dashboard page
    Route::get('home', [StdParentController::class, 'showDashboard'])->name('home');
    //for dashboard menu url
    Route::get('home', [StdParentController::class, 'dashboardMenu'])->name('home');
});