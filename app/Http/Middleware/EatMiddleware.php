<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class EatMiddleware
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
        if ($request->route()->parameter('eat')->user_id !== Auth::id()) {
            abort(403);
        }

        return $next($request);
    }
}
