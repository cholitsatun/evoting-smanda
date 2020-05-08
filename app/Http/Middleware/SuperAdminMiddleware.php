<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class SuperAdminMiddleware
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
        if (Auth::guard('admin')->check()) {
            if (Auth::guard('admin')->user()->role=='superadmin') {
                return $next($request);
            }
            else 
                abort(403);
        } 
        else 
            abort(403);
    }
}
