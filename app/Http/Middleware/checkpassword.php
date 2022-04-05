<?php

namespace App\Http\Middleware;

use Closure;

class checkpassword
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
        if($request->api_password !== env('api_password ')){
            return response()->json(['massege'=>'unauthanticated']) ;
        }
        return $next($request);

    }
}
