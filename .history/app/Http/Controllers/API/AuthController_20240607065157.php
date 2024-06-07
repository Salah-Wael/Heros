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
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function showRegister(){
        return view('/auth.register');
    }

    // public function register(UserAuthRequest $request){
    //     $user=new User;
    //     $user['firstName']= $request['firstName'];
    //     $user['lastName']= $request['lastName'];
    //     $user['email']= $request['email'];
    //     $user['password']=bcrypt($request['password']);
    //     $user['birthDate']= $request['birthDate'];
    //     $user['gender']= $request['gender'];
    //     $user['role'] = 'user';

    //     $user->save();

    //     // $validatedData['password'] = bcrypt($validatedData['password']);
    //     // $user = User::create($validatedData);

    //     // return redirect()->route('login')->with("success","Registration Successfully");
    //     return response()->json([
    //         'status' => 201,
    //         'success' => "Registration Successfully",
    //     ]);
    // }
    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|between:2,100',
            'firstName' => ['required', 'min:2', 'max:50'],
            'lastName' => ['required', 'min:2', 'max:50'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
            'birthDate' => ['required', 'date'],
            'gender' => ['required'],
            'checkbox' => ['required']
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);
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
    // public function login(Request $request) {
    //     $validatedData = $request->validate([
    //     'email' => ['required','email'],
    //     'password' => ['required']
    //     ],
    //     #errors
    //     [
    //             'email' . 'email' => "Invalid Login Details!",
    //             'email' . 'required' => "Invalid Login Details!",
    //             'password' . 'required' => "Invalid Login Details!"
    //     ]);

    //     if (User::where('password', '=', NULL)->exists()){
    //         return redirect()->route('socialite.set-password');
    //     }
    //     elseif(auth()->attempt($validatedData, $request->get('remember'))) {
    //         #logged in
    //         session()->regenerate();
    //         $userRole = auth()->user()->role;
    //         switch($userRole){
    //             case auth()->user()->role == 'admin':
    
    //                 return response()->json([
    //                     'status' => 200,
    //                     'message' => "You have successfully logged in as admin",
    //                 ]);
    //                 break;

    //             case auth()->user()->role == 'hero':
    
    //                 return response()->json([
    //                     'status' => 200,
    //                     'message' => "You have successfully logged in as Hero",
    //                 ]);
    //                 break;

    //             case auth()->user()->role == 'user':
    
    //                 return response()->json([
    //                     'status' => 200,
    //                     'message' => "You have successfully logged in as User",
    //                 ]);
    //                 break;

    //             default:
    //                 return response()->json([
    //                     'status' => "unauthorized",
    //                     'message' => "Invalid Login Details!",
    //                 ]);
    //         }

    //     }
    //     else{
    //         // return back()->withErrors(
    //         //     [
    //         //         'email' => 'Invalid Login Details!',
    //         //         'password' => 'Invalid Login Details!'
    //         //     ]
    //         // );
    //         return response()->json([
    //             'status' => "unauthorized",
    //             'message' => "Invalid Login Details!",
    //         ]);
    //     }
    // }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required','email'],
            'password' => ['required','min:6'],
        ],
        #errors
        [
            'email' . 'email' => "Invalid Login Details!",
            'email' . 'required' => "Invalid Login Details!",
            'password' . 'required' => "Invalid Login Details!"
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->createNewToken($token);
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
