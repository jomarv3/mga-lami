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
        // If user is not logged in → redirect to login
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        // If user role is not the required one → block access
        if (auth()->user()->role !== $role) {
            abort(403, 'Unauthorized Access.');
        }

        return $next($request);
    }
}