<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }
    public function login(){
        return view('auth.login');
    }
    public function showRegister(){
        return view('/auth.register');
    }
public function register(Request $request){
        $validatedData = $request->validate([
            // (string & | ) or array
            'name' => ['required','min:3','max:255'],
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
return redirect("/login"")
    }
}
