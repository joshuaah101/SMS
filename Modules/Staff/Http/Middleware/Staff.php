<?php

namespace Modules\Staff\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Staff extends Middleware
{

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('staff.login');
        }
    }
}
