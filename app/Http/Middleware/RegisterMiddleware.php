<?php

namespace App\Http\Middleware;

use Closure;

class RegisterMiddleware
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
        if (Auth::guard('voter')->check()) {
            $voter = Voter::find(Auth::guard('voter')->id());
            if($voter->registerinfo == 1) {
                abort(403, 'You have been registered');
            }
        return $next($request);
        }
    }
}
