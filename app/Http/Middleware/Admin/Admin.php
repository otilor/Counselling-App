<?php

namespace App\Http\Middleware\Admin;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()){
            return redirect()->route('login');
        }

        if(Auth::user()->role_id == 0){
            return "Y";
        }
        else
        {
            return "N";
        }
        return $next($request);
    }
}
