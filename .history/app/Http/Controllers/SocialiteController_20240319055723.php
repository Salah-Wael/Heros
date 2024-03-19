<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleRedirect(){
        $user = Socialite::driver('google')->user();
    }

    public function twitterLogin()
{
        return Socialite::driver('twitter')->redirect();
    }
    public function twitterRedirect(){
        $user = Socialite::driver('twitter')->user();
    }
}
