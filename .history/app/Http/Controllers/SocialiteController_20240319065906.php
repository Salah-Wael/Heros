<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        ],
        [
            'email' => $googleUser->getEmail(),
            'firstName' => $googleUser->getEmail(),
            'lastName' => $googleUser->getEmail(),
            'fullName' => $googleUser->getEmail(),
            'gender' => $googleUser->getEmail(),
            'birthDate' => $googleUser->getEmail(),
            
        ]);
    }

    public function twitterLogin(){
        return Socialite::driver('twitter')->redirect();
    }
    public function twitterRedirect(){
        $twitterUser = Socialite::driver('twitter')->user();
        dd($twitterUser);
    }
}
