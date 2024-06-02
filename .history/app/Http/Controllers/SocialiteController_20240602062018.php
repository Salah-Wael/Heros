<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function socialiteSetPassword()
    {
        return view('auth.socialite-change-password');
    }

    public function setPassword(Request $request)
    {
        $validatedData = $request->validate([
            // (string & | ) or array
            'password' => ['required', 'min:6', 'confirmed'],
        ]);
        $user = Auth::user();
        $user->update([
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect()->route('user');
    }
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googleRedirect()
    {
        $googleUser = Socialite::driver('google')->user();
        $role = 'user';
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
                'role' => $role,

            ]
        );

        Auth::login($user, true);
        if (User::where('password', '=', NULL)->exists())
            return redirect()->route('socialite.set-password');

        return redirect()->route('user');
    }

    public function twitterLogin()
    {
        return Socialite::driver('twitter')->redirect();
    }
    public function twitterRedirect()
    {
        // $twitterUser = Socialite::driver('twitter')->user();
        // dd($twitterUser);
        // $role = 'user';
        // $user = User::updateOrCreate(
        //     [
        //         'provider_id' => $twitterUser->getId(),
        //         'provider' => 'twitter',
        //     ],
        //     [
        //         'email' => $twitterUser->getEmail(),
        //         'firstName' => $twitterUser->user['given_name'],
        //         'lastName' => $twitterUser->user['family_name'],
        //         'fullName' => $twitterUser->user['name'],
        //         'email_verified_at' => now(),
        //         // 'gender' => $twitterUser->gender, // Assuming this property exists in your Google data
        //         // 'birthDate' => $twitterUser->birthDate, // Assuming this property exists in your Google data
        //         'role' => $role,

        //     ]
        // );

        // Auth::login($user, true);
        // if (User::where('password', '=', NULL)->exists())
        //     return redirect()->route('socialite.set-password');

        // return redirect()->route('user');
        try {
            $twitterUser = Socialite::driver('twitter')->user();
        } catch (\Exception $e) {
            return redirect('/login')->withErrors(['login' => 'Failed to login using Twitter.']);
        }

        // Find or create the user
        $user = User::firstOrCreate([
            'p_id' => $twitterUser->getId(),
        ], [
            'name' => $twitterUser->getName(),
            'email' => $twitterUser->getEmail(),
            'avatar' => $twitterUser->getAvatar(),
        ]);

        Auth::login($user, true);

        return redirect()->route('user');
    }
}
