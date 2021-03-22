<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->user()){
        if($request->user()->isSuperuser() || $request->user()->isStaff()){
            if($request->session()->has('admin')){
            return $next($request);
        }else{
            return redirect('admin/login');

        }
        }
    }
        return redirect('admin/login');

    }
}
