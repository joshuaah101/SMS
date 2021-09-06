<?php

namespace Modules\Alumni\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Alumni extends Middleware
{

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('staff.login');
        }
    }
}
