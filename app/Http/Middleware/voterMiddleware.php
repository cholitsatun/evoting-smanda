<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Voter;

class voterMiddleware
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
            // dd(Auth::guard('voter')->id());
            $voter = Voter::find(Auth::guard('voter')->id());
            // dd ($voter->status);
            if ($voter->status == 1 ) {
                return redirect('/suara/aftervote');
            }
            return $next($request);
            // else {
            //     return $next($request);
            // }   
            // if ($request->has('id') && $request->has('status') == 0) {
            //     return redirect('/suara/home');
            // }
            // else {
            //     return redirect('/suara/aftervote');
            // }
        }
        return redirect('/login');
    }
}
