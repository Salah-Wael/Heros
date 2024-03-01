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
        'name' => ['required','min:3','max:255', 'unique:users'],
        'email' => ['required','email','unique:users'],
        'password'=> ['required','confirmed']
    ]);
    // $user=new User;
    // $user['name']=$validatedData['name'];
    // $user['email']=$validatedData['email'];
    // $user['password']=bcrypt($validatedData['password']);
    // dd($validatedData);
    // $user->save();

    $validatedData ['password']=bcrypt($validatedData['password']);
    $user = User::create($validatedData);
    return redirect("/login")->with("success","Registration Successfully");
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
            'email'.'email' => "Email is invalid",
            'email'.'required' => "input the Email",
            'password'.'required' => "input the Password"
        ]);
        if(auth()->attempt($validatedData)) {
            #logged in
            session()->regenerate();
            return  redirect("/");
        }
        return  back()->withErrors(
            ['email' => 'Invalid Login Details!',
            'password' => 'Invalid Login Details!'
    ]);
    }

    public function  logout() {
        auth()->logout();
        session()
    }
}
