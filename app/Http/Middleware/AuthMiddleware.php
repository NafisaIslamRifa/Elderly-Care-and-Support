<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // If the user is not authenticated, redirect to login page
        if (!Auth::check()) {
            return redirect('/account/login');
        }

        // If the authenticated user is an admin, redirect to admin dashboard
        if (Auth::user()->role == 'admin') {
            return redirect('/admin/dashboard');
        }

        // If the authenticated user is a normal user, redirect to user dashboard
        if (Auth::user()->role == 'customer') {
            return redirect('/account/dashboard');
        }

        return $next($request); // Allow the request to continue if no redirection is needed
    }
}
