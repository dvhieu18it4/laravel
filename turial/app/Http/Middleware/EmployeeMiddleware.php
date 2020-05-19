<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class EmployeeMiddleware
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
         if (Auth::user()->usertype =='admin' ) {
            return $next($request);
        }
        elseif (Auth::user()->usertype =='actor') {
             return $next($request);
        }
        else{
            return redirect('/trangchu')->with('status','Bạn không được phép vào trang này');
        }
    }
}
