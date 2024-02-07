<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Allow access to registration page
        if ($request->is('auth/register')) {
            return $next($request);
        }

        // Redirect unauthenticated users to the login page for other routes
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        return $next($request);
    }



}
