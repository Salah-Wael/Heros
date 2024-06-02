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
    public function twitterRedirect(){

        return redirect()->route('user');
        try {
            $twitterUser = Socialite::driver('twitter')->user();
        } catch (\Exception $e) {
            return redirect('/login')->withErrors(['success' => 'Failed to login using Twitter.']);
        }
        // dd($twitterUser);
        // Find or create the user
        $role = 'user';
        $name = $twitterUser->getName();
        $nameParts = explode(' ', $name);
        $firstName = $nameParts[0];
        $lastName = isset($nameParts[1]) ? $nameParts[1] : '';

        // Check if the user with the given email already exists
        $user = User::where('email', $email)->first();
        if ($user) {
            // Update existing user
            $user->update([
                'provider_id' => $twitterUser->getId(),
                'provider' => 'twitter',
                'first_name' => $firstName,
                'last_name' => $lastName,
                'full_name' => $name,
                'avatar' => $avatar,
            ]);
        } else {
            // Create new user
            $user = User::create([
                'provider_id' => $twitterUser->getId(),
                'provider' => 'twitter',
                'first_name' => $firstName,
                'last_name' => $lastName,
                'full_name' => $twitterUser->getName(),
                'email' => $twitterUser->getEmail(),
                'email_verified_at' => now(),
                // 'avatar' => $avatar,
                'role' => $role,
            ]);
        Auth::login($user, true);
        if (User::where('password', '=', NULL)->exists())
            return redirect()->route('socialite.set-password');
    }
    return redirect()->route('user');
}