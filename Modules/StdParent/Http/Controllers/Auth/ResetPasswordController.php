<?php

namespace Modules\StdParent\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Modules\StdParent\Providers\RouteServiceProvider;
use Modules\StdParent\Traits\ResetsParentPassword;

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

    use ResetsParentPassword;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
