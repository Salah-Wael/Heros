<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Sport;
use App\Models\Country;
use App\Models\HerosRequest;
use Illuminate\Http\Request;
use App\Models\HeroRequestBank;
use App\Models\HeroRequestImage;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Apis\LoginRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\Apis\RegisterRequest;
use App\Http\Requests\Apis\ProfileUpdateRequest;

class AuthController extends BaseController
{

    public function showLogin()
    {
        // return view('auth.login');
        return response()->json([
            'status' => 200,
        ]);
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $data = new UserResource(auth()->user());
            return $this->success($data);
        } else {
            return $this->error([
                'message' => 'Invalid Login Details!'
            ]);
        }
    }

    public function showRegisterHero()
    {
        $sports = Sport::orderBy('sport')->get();
        $countries = Country::orderBy('country')->get();
        // return view('/auth.register-hero',compact(['sports','countries']));
        return response()->json([
            'status' => 200,
            'sports' => $sports,
            'countries' => $countries,
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

        // $user = UserApi::create(array_merge(
        //     $validator->validated(),
        //     ['password' => bcrypt($request->password)]
        // ));
        $user = new User;
        $user['firstName'] = $request['firstName'];
        $user['lastName'] = $request['lastName'];
        $user['email'] = $request['email'];
        $user['password'] = bcrypt($request['password']);
        $user['birthDate'] = $request['birthDate'];
        $user['gender'] = $request['gender'];
        $user['role'] = 'user';

        $user->save();

        return response()->json([
            'message' => 'User successfully registered',
            'user' => $user
        ], 201);

        // $user = User::create($request->input());

        // $data = new UserResource($user);

        // return $this->success($data);
    }

    public function registerHero(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstName' => ['required', 'min:2', 'max:50'],
            'lastName' => ['required', 'min:2', 'max:50'],
            'shortName' => ['required', 'max:20'],
            'height' => ['required', 'numeric', 'min:0.5', 'max:2.50'],
            'weight' => ['required', 'numeric', 'min:10'],
            'origin_country' => ['required'],
            'play_country' => ['required'],
            'sport' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
            'birthDate' => ['required', 'date'],
            'gender' => ['required'],
            'checkbox' => ['required'],
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = new User;
        $user['firstName'] = $request['firstName'];
        $user['lastName'] = $request['lastName'];
        $user['fullName'] = $user['firstName'] . ' ' . $user['lastName'];
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

        $heroRequest = HerosRequest::where('auth_id', $request['id'])->first();
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $imageName = uniqid() . $file->getClientOriginalName();
                $noSpacesString = str_replace(' ', '', $imageName);
                $file->move(public_path('assets/images/HerosImages'), $noSpacesString);

                // Create a new picture record for each uploaded file
                HeroRequestImage::create([
                    'heros_requests_id' => $heroRequest->id,
                    'image' => $noSpacesString,
                ]);
            }
        }
        foreach ($request->accounts as $account) {
            $bankId = HerosRequest::where('name', $user['id'])->first();

            $account->
            HeroRequestBank::create([
                'heros_requests_id' => $heroRequest->id,
                'account' => $account,
                'bank_id' => $bankId,
            ]);
        }



        // return redirect()->route('login')->with("success", "The request sent Successfully");
        return response()->json([
            'status' => 201,
            'success' => "The request sent Successfully",
        ]);
    }

    public function showForgotPassword()
    {
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
    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // public function logout()
    // {
    //     auth()->logout();

    //     return response()->json(['message' => 'User successfully signed out']);
    // }

    public function profile(Request $request)
    {
        $data = new UserResource(auth()->user());
        return $this->success($data);
    }

    // public function updateProfile(ProfileUpdateRequest $request)
    // {
    //     $imagePath = null;

    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $filename = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('images'), $filename);
    //         $imagePath = 'images/' . $filename;
    //     }
    //     /** @var \App\Models\User $user **/
    //     $user = auth()->user();

    //     $user->email = $request->email;
    //     $user->phone = $request->phone;
    //     $user->name = $request->name;
    //     $user->image_path = $imagePath ?? $user->image_path;
    //     $user->gender = $request->gender;
    //     $user->save();

    //     $data = new UserResource($user);

    //     return $this->success($data, 'Updated Successfully');
    // }
}
