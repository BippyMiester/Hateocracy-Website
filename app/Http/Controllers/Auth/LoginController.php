<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;


class LoginController extends Controller
{
    /**
     * Redirect the user to the discord authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('discord')->redirect();
    }

    /**
     * Obtain the user information from discord.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $discordUser = Socialite::driver('discord')
            ->setHttpClient(new \GuzzleHttp\Client(['verify' => false]))
            ->stateless()
            ->user();

//        dd($discordUser);

        // See if User already exists in database
        $user = User::where([
            ['id', '=', $discordUser->user['id']]
        ])->first();

        // If user doesn't exist
        if($user === null) {
            // Add User To Database
            $user = new User;
        }

        // Save the Users Information
        $user->id = $discordUser->user['id'];
        $user->username = $discordUser->user['username'];
        $user->display_name = $discordUser->user['global_name'];
        $user->avatar = $discordUser->avatar;
        $user->email = $discordUser->user['email'];
        $user->locale = $discordUser->user['locale'];
        $user->save();

        Auth::login($user, true);

        return redirect()->route('index');

    }

    public function logout() {
        Auth::logout();
        Session::flush();
        return redirect()->route('index');
    }
}
