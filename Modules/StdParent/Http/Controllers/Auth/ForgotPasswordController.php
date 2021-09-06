<?php

namespace Modules\StdParent\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Modules\StdParent\Traits\SendPasswordResetParentEmails;


class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendPasswordResetParentEmails;
}
