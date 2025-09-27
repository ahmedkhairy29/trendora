<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('/login'); 
        }

        if (Auth::user()->is_admin != 1) {
            abort(403); 
        }

        return $next($request);
    }
}

