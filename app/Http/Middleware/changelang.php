<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class changelang
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
        app()->setLocale('ar') ;
        if(isset($request->lang) && $request->lang == 'en')
            app()->setLocale('en') ;

        return $next($request);
    }
}
