<?php

namespace App\Http\Controllers;

use App\Models\UserSettings;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TermsController extends Controller
{

    public function display() {
        return view('user.terms.display');
    }

    public function accept() {
        return view('user.terms.accept');
    }

    public function submit(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login.discord');
        }

        $userSettings = UserSettings::firstOrCreate(['user_id' => $user->id]);
        $userSettings->accepted_terms = true;
        $userSettings->accepted_terms_timestamp = Carbon::now(); // Carbon instance
        $userSettings->save();

        return redirect()->route('user.dashboard');
    }
    // write the agreement route form post method
    // Get the terms all set up by allowing public access to JUST the terms
    // Allow user profile deletion from the website

}
