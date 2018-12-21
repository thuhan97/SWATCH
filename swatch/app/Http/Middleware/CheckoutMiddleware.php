<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class CheckoutMiddleware
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
        if(Session::get('cart')){
            return $next($request);
        }
        else abort(403,"Unauthorized action");
    }
}
