<?php

namespace App\Http\Middleware\Super_Admin;

use Closure;
use Illuminate\Support\Facades\Auth;

class Super_Admin
{
    /**
     * Handle an incoming request. - This middleware checks
     * if the current user is a super_admin or not
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check())
        {
            return redirect()->route('login');
        }
        if (Auth::user()->role_id == 0)
        {
            return $next($request);
        }

        return redirect()->route('admin');
        
    }
}
