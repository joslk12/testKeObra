<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        $response = $next($request)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Credentials', 'true')
        ->header('Access-Control-Allow-Methods', 'GET, HEAD, OPTIONS, POST, PUT')
        ->header('Access-Control-Allow-Headers', 'Origin, Accept, Content-Type, X-Requested-With, X-Auth-Token, Authorization, x-requested-with');
        return $response;
    }
}
