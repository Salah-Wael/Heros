<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Models\Sport;
use App\Models\Country;
use App\Models\HerosRequest;
use Illuminate\Http\Request;
use App\Models\HeroRequestImage;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeroAuthRequest;
use App\Http\Requests\UserAuthRequest;

class AuthController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth')->only(['logout']);
    // }
    public function showRegister(){
        return view('/auth.register');
    }

    public function register(UserAuthRequest $request){
        $user=new User;
        $user['firstName']= $request['firstName'];
        $user['lastName']= $request['lastName'];
        $user['email']= $request['email'];
        $user['password']=bcrypt($request['password']);
        $user['birthDate']= $request['birthDate'];
        $user['gender']= $request['gender'];
        $user['role'] = 'user';

        $user->save();

        // $validatedData['password'] = bcrypt($validatedData['password']);
        // $user = User::create($validatedData);

        // return redirect()->route('login')->with("success","Registration Successfully");
        return response()->json([
            'status' => 201,
            'success' => "Registration Successfully",
        ]);
    }

    public function showRegisterHero()
    {
        $sports = Sport::orderBy('sport')->get();
        $countries= Country::orderBy('country')->get();
        // return view('/auth.register-hero',compact(['sports','countries']));
        return response()->json([
            'status' => 200,
            'sports' => $sports,
            'countries' => $countries,
        ]);
    }
    public function registerHero(HeroAuthRequest $request)
    {

        $user = new User;
        $user['firstName'] = $request['firstName'];
        $user['lastName'] = $request['lastName'];
        $user['fullName'] = $user['firstName'].' '. $user['lastName'];
        $user['email'] = $request['email'];
        $user['password'] = bcrypt($request['password']);
        $user['birthDate'] = $request['birthDate'];
        $user['gender'] = $request['gender'];
        $user['role'] = 'user';
        $user->save();

        HerosRequest::create([
            'firstName' => $request['firstName'],
            'lastName' => $request['lastName'],
            'fullName' => $request['firstName'] . ' ' . $request['lastName'],
            'shortName' => $request['shortName'],
            'height' => $request['height'],
            'weight' => $request['weight'],
            'origin_country' => $request['origin_country'],
            'play_country' => $request['play_country'],
            'sport' => $request['sport'],
            'birthDate' => $request['birthDate'],
            'gender' => $request['gender'],
            'auth_id' => $user['id'],
        ]);

        $heroRequest = HerosRequest::where('auth_id' ,$user['id'])->first();
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $imageName = uniqid() . $file->getClientOriginalName() ;
                $noSpacesString = str_replace(' ', '', $imageName);
                $file->move(public_path('assets/images/HerosImages'), $noSpacesString);

                // Create a new picture record for each uploaded file
                HeroRequestImage::create([
                    'heros_requests_id' => $heroRequest->id,
                    'image' => $noSpacesString,
                ]);
            }
        }

        // return redirect()->route('login')->with("success", "The request sent Successfully");
        return response()->json([
            'status' => 201,
            'success' => "The request sent Successfully",
        ]);
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
        }
        elseif(auth()->attempt($validatedData, $request->get('remember'))) {
            #logged in
            session()->regenerate();
            $userRole = auth()->user()->role;
            switch($userRole){
                case auth()->user()->role == 'admin':
                    // return redirect()->route('admin')
                    // ->with('successRole', 'You have successfully logged in as admin');
                    return response()->json([
                        'status' => 200,
                        'message' => "You have successfully logged in as admin",
                    ]);
                    break;

                case auth()->user()->role == 'hero':
                    // return redirect()->route('hero')
                    // ->with('successRole', 'You have successfully logged in as hero');
                    return response()->json([
                        'status' => 200,
                        'message' => "You have successfully logged in as Hero",
                    ]);
                    break;

                case auth()->user()->role == 'user':
                    // return  redirect()->route('user');
                    return response()->json([
                        'status' => 200,
                        'message' => "You have successfully logged in as User",
                    ]);
                    break;

                default:
                    // return back()->withErrors(
                    //     ['email' => 'Invalid Login Details!',
                    //     'password' => 'Invalid Login Details!'
                    // ]);
                    return response()->json([
                        'status' => "unauthorized",
                        'message' => "Invalid Login Details!",
                    ]);
            }

        }
        else{
            // return back()->withErrors(
            //     [
            //         'email' => 'Invalid Login Details!',
            //         'password' => 'Invalid Login Details!'
            //     ]
            // );
            return response()->json([
                'status' => "unauthorized",
                'message' => "Invalid Login Details!",
            ]);
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
        // return  redirect()->route('login')->with("success","Logged out successfully!");
        return response()->json([
            'status' => 200,
            'success' => "Logged out successfully!",
        ]);
    }
}
