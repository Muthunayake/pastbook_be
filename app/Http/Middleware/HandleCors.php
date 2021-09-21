<?php

namespace App\Http\Middleware;

use Closure;

class HandleCors
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
        return $next($request)
            ->header('Access-Control-Allow-Origin',  implode(",", config('cors.allowed_origins')))
            ->header('Access-Control-Allow-Methods', implode(",", config('cors.allowed_methods')))
            ->header('Access-Control-Allow-Headers', implode(",", config('cors.allowed_headers')));
    }
}
