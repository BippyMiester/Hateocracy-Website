<?php

namespace App\Http\Middleware;

use App\Models\UserSettings;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class AcceptedTerms
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

        $settings = UserSettings::where('user_id', $user->id)->first();
        if($settings == null) {
            dd("Settings Null!");
        }

        if($settings->accepted_terms) {
            return $next($request);
        }

        View::share('user', $user);
        return redirect()->route('terms.accept');
    }
}
