<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdmin
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
        if(Auth::check())
        {
            if(Auth::user()->email == "shubhamkanchar687@gmail.com")
            {
                return $next($request);
            }
            else
            {
                return redirect()->route('pet-form');
            }
        }else{
          //User Not logged in login
            return redirect()->route('login');
        }
    }
}
