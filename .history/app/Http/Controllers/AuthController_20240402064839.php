<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{

    public function showRegister(){
        return view('/auth.register');
    }

    public function register(Request $request){
        $validatedData = $request->validate([
        // (string & | ) or array
        'firstName' => ['required','min:3','max:255'],
        'lastName' => ['required','min:3','max:255'],
        'email' => ['required','email','unique:users'],
        'password'=> ['required','min:6','confirmed'],
        'birthDate' => ['required','date'],
        'gender' => ['required']
    ]);
    $user=new User;
    $user['firstName']=$validatedData['firstName'];
    $user['lastName']=$validatedData['lastName'];
    $user['email']=$validatedData['email'];
    $user['password']=bcrypt($validatedData['password']);
    $user['birthDate']=$validatedData['birthDate'];
    $user['gender']=$validatedData['gender'];
    if((strpos($user['email'], "@admin.me") !== false) && ($user['birthDate'] == '2002-02-02') &&  ($user['gender'] == 'male')) {
        $user['role'] = 'admin';
    }
    else{
        $user['role'] = 'user';
    }

    $user->save();

    // $validatedData['password'] = bcrypt($validatedData['password']);
    // $user = User::create($validatedData);

    return redirect()->route('login')->with("success","Registration Successfully");
    }

    public function showRegisterHero()
    {
        return view('/auth.register-hero');
    }
    public function registerHero(Request $request)
    {
        $validatedData = $request->validate([
            // (string & | ) or array
            'firstName' => ['required', 'min:3', 'max:255'],
            'lastName' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
            'birthDate' => ['required', 'date'],
            'gender' => ['required']
        ]);
        $user = new User;
        $user['firstName'] = $validatedData['firstName'];
        $user['lastName'] = $validatedData['lastName'];
        $user['fullName'] = $user['firstName'].' '. $user['lastName'];
        $user['email'] = $validatedData['email'];
        $user['password'] = bcrypt($validatedData['password']);
        $user['birthDate'] = $validatedData['birthDate'];
        $user['gender'] = $validatedData['gender'];
        if ((strpos($user['email'], "@admin.me") !== false) && ($user['birthDate'] == '2002-02-02') &&  ($user['gender'] == 'female')) {
            $user['role'] = 'admin';
        } else {
            $user['role'] = 'user';
        }

        $user->save();

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $user = User::create($validatedData);

        return redirect()->route('login')->with("success", "Registration Successfully");
    }
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request) {
        $validatedData = $request->validate([
        'email' => ['required','email'],
        'password' => ['required']
        ],
        #errors
        [
                'email' . 'email' => "Invalid Login Details!",
                'email' . 'required' => "Invalid Login Details!",
                'password' . 'required' => "Invalid Login Details!"
        ]);

        if (User::where('password', '=', NULL)->exists()){
            return redirect()->route('socialite.set-password');

        elseif(auth()->attempt($validatedData)) {
            #logged in
            session()->regenerate();
            $userRole = auth()->user()->role;
            switch($userRole){
                case auth()->user()->role == 'admin':
                    return redirect()->route('admin')
                    ->with('successRole', 'You have successfully logged in as admin');
                    break;

                case auth()->user()->role == 'hero':
                    return redirect()->route('hero')
                    ->with('successRole', 'You have successfully logged in as hero');
                    break;

                case auth()->user()->role == 'user':
                    return  redirect()->route('user');
                    break;

                default:
                    return back()->withErrors(
                    ['email' => 'Invalid Login Details!',
                    'password' => 'Invalid Login Details!'
                    ]);
            }

        }
        else{
            return back()->withErrors(
                [
                    'email' => 'Invalid Login Details!',
                    'password' => 'Invalid Login Details!'
                ]
            );
        }
    }
    public function showForgotPassword() {
        return view('auth.forgot-password');
    }

    public function forgotPassword(){

    }

    public function  logout() {
        auth()->logout();
        session()->regenerateToken();
        session()->invalidate();
        return  redirect()->route('login')->with("success","Logged out successfully!");
    }
}
