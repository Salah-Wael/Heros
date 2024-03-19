<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('github')->redirect();
    }
    public function googleRedirect(){
        $user = Socialite::driver('github')->user();
    }
    public function twitterLogin()
    {
        return Socialite::driver('twitter')->redirect();
    }
    public function twitterRedirect()
    {
    }
}
