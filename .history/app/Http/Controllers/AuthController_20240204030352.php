<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required',
            'confirm'=> 'required|confirmed'
        ]);
        dd($validatedData);
    }
}
