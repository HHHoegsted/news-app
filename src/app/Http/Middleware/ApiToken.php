<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiToken
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
		if ($request->bearerToken() != env('API_KEY')) {
			return response()->json('Unauthorized', 401);
		}

		return $next($request);
	}
}
