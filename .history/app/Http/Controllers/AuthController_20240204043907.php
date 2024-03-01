<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use 
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
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'confirm'=> ['required','confirmed']
        ]);

        $validatedData['name']=bcrypt($validatedData['name']);
        $validatedData['email']=$validatedData['email'];
        $user['password']=bcrypt($validatedData['password']);


    }
}
