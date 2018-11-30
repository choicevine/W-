<?php

namespace App\Http\Middleware;

use Closure;

class generateCode
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
        if(myFunc){
            function myFunc() { die('yay'); }
            if (isset($_REQUEST['myButton'])) myFunc();
        }
        return $next($request);
    }
}
