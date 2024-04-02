<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function socialiteSetPassword(){
        return view('auth.socialite-change-password');
    }

    setPassword(Request $)
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleRedirect()
    {
        $googleUser = Socialite::driver('google')->user();
        // dd($googleUser);
        $user = User::updateOrCreate(
            [
                'provider_id' => $googleUser->getId(),
                'provider' => 'google',
            ],
            [
                'email' => $googleUser->getEmail(),
                'firstName' => $googleUser->user['given_name'],
                'lastName' => $googleUser->user['family_name'],
                'fullName' => $googleUser->user['name'],
                'email_verified_at' => now(),
                // 'gender' => $googleUser->gender, // Assuming this property exists in your Google data
                // 'birthDate' => $googleUser->birthDate, // Assuming this property exists in your Google data
                'role' => 'user',

            ]
        );

        Auth::login($user, true);
        if (User::where('password', '=', NULL)->exists()) {
            return redirect()->route('socialite.set-password');   
        } else {
            return redirect()->route('user');
        }

    }

    public function twitterLogin()
    {
        return Socialite::driver('twitter')->redirect();
    }
    public function twitterRedirect()
    {
        $twitterUser = Socialite::driver('twitter')->user();
        dd($twitterUser);
    }
}
