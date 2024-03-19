<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }
    public function googleRedirect(){
        $googleUser = Socialite::driver('google')->user();
        $user= User::updateOrCreate([
            'provider_id' => $googleUser->getId()
            'provider_id' => $googleUser->getId()
        ],
        [
            'email' => $googleUser->getEmail(),
            'firstName' => $googleUser->user['given_name'],
            'lastName' => $googleUser->user['family_name'],
            'fullName' => $googleUser->user['given_name'].' '.$googleUser->user['family_name'],
            // 'gender' => $googleUser->gender, // Assuming this property exists in your Google data
            // 'birthDate' => $googleUser->birthDate, // Assuming this property exists in your Google data
            'role' => 'user',

        ]);

        Auth::login($user,true);
        return to_route('user');
    }

    public function twitterLogin(){
        return Socialite::driver('twitter')->redirect();
    }
    public function twitterRedirect(){
        $twitterUser = Socialite::driver('twitter')->user();
        dd($twitterUser);
    }
}
