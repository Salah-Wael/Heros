<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public  function __contruct(){
    $this->middleware('auth');
    }

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
    if((strpos($user['email'], "@admin.com") !== false) && ($user['birthDate'] == '2002-02-02') &&  ($user['gender'] == 'male')) {
        $user['role'] = 'admin';
    }
    else{
        $user['role'] = 'user';
    }

    $user->save();
    // dd($user);

    // $validatedData['password'] = bcrypt($validatedData['password']);
    // $user = User::create($validatedData);

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
            switch($user['role']){
                case auth()->user()->role == 'admin':
                    return redirect()->intended('/admin')
                    ->with('success', 'You have successfully logged in as admin');
                    break;
                case auth()->user()->role == 'user':
                    return redirect()->intended('/')
                    break;

            }

            default:
            return  redirect("/");
        }
        return  back()->withErrors(
            ['email' => 'Invalid Login Details!',
            'password' => 'Invalid Login Details!'
    ]);
    }

    public function  logout() {
        auth()->logout();
        session()->regenerateToken();
        session()->invalidate();
        return  redirect('/login')->with("success","Logged out successfully!");
    }
}
