<?php

namespace Modules\Staff\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Modules\Staff\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Modules\Staff\Traits\ResetsStaffPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsStaffPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
