<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
   
        public function handle(Request $request, Closure $next, $role)
        {
            if (!$request->user() || !$request->user()->hasRole($role)) {
                return redirect('/'); // Redirect to home if not authorized
            }
    
            return $next($request);
        
    }
}
