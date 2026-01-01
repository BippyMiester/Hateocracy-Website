<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class IsUserAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // Check if user is even logged in
        if($user == null) {
            return redirect()->route('login.discord');
        }

        // Check if user is an admin
        if($user->is_admin == true) {
            View::share('user', $user);
            return $next($request);
        }

        // Fallback return
        return redirect()->route('user.dashboard');
    }
}
