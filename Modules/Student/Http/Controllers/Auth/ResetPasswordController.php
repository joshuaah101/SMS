<?php

namespace Modules\Student\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Modules\Student\Providers\RouteServiceProvider;
use Modules\Student\traits\ResetStudentPassword;

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

    use ResetStudentPassword;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
