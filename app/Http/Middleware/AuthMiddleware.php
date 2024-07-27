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
    public function handle(Request $request, Closure $next): Response

    {
        if (!Auth::check()) {
            return redirect()->route('account.login');
        }
        $userrole=Auth::user()->role;

        if($userrole=='Customer'){
            return redirect()->route('account.dashboard');
        }
        elseif($userrole=='Admin'){
            return redirect()->route('admin.dashboard');

        }
        

        return $next($request);
    }
}
