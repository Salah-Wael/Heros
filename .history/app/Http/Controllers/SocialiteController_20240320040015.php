<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function login($provider){
        return Socialite::driver($provider)->redirect();
    }
    public function redirect($provider){
        $providerUser = Socialite::driver($provider)->user();
        $user = User::updateOrCreate(
            [
                'provider_id' => $providerUser->getId(),
                'provider_name' => $provider,
            ],
            [
                'email' => $providerUser->getEmail(),
                'firstName' => $providerUser->user['given_name'],
                'lastName' => $providerUser->user['family_name'],
                'fullName' => $providerUser->user['given_name'] . ' ' . $providerUser->user['family_name'],
                // 'gender' => $providerUser->gender, // Assuming this property exists in your Google data
                // 'birthDate' => $providerUser->birthDate, // Assuming this property exists in your Google data
                'role' => 'user',

            ]
        );

        Auth::login($user, true);
        return to_route('user');
        // return to_route('hero');
    }

    // public function twitterLogin()
    // {
    //     return Socialite::driver('twitter')->redirect();
    // }
    // public function twitterRedirect()
    // {
    //     $twitterUser = Socialite::driver('twitter')->user();
    //     dd($twitterUser);
    // }
}
