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
        // This checks if the user is authenticated
        if (!Auth::check())
        {
            return redirect()->route('login');
        }
        

        // This checks if the user is a super admin

        /**
         * Role_id
         * 0 is for super admin
         * 1 is for normal admin
         */
        
        if (Auth::user()->role_id == 0)
        {
            return $next($request);
        }


        // This evaluates if the above condition is false
        return redirect()->route('admin');
        
    }
}
