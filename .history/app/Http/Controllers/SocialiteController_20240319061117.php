<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }
    public function googleRedirect(){
        $googleUser = Socialite::driver('google')->user();
        dd($googleUser);
    }

    public function twitterLogin(){
        return Socialite::driver('twitter')->redirect();
    }
    public function twitterRedirect(){
        $twitteruser = Socialite::driver('twitter')->user();
        dd($user);
    }
}
