<?php

namespace App\Http\Middleware;

use Closure;

class isLoggedin
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
        if($request->User())
        {
            return $next($request);
        }
        return redirect('student/login/');
    }
}
