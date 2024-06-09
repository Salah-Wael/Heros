<?php

namespace App\Http\Controllers\Api;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HeroController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function heroHome() {

        // return view('hero.home');
        return response()->json([
            'status' => 200,
        ]);

    }

    public function heroProfile($id){
        
        $hero = Hero::with('images')->find($id);

        // Check if the hero exists
        if (!$hero) {
            return response()->json([
                'status' => 404,
                'message' => 'Hero not found',
            ], 404);
        }

        // Return a JSON response with the status and hero data
        return response()->json([
            'status' => 200,
            'hero' => $hero,
        ]);
    }
    public  function editHeroProfile($id) {
        $hero = Hero::find($id);
        $auth_id = $hero->auth_id;
        if(auth()->user()->role == 'hero' && auth()->user()->id == $auth_id){

            $hero = Hero::with('images')->where('id',$id)->first();
            // return view('hero.profile-edit');
            return response()->json([
                'status' => 200,
                'hero' => $hero,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => "Sorry this isn't your profile page to edit it!",
            ]);
        }
    }

    public function updateHeroProfile(Request $request, $id){
        $hero = Hero::find($id);

        if ((auth()->user()->role == 'hero' && auth()->user()->id == $hero->auth_id)) {
            $data = validator::make(
                $request->all(),
                [
                    'firstName' => ['required', 'min:2', 'max:50'],
                    'lastName' => ['required', 'min:2', 'max:50'],
                    'shortName' => ['required', 'max:20'],
                    'height' => ['required', 'numeric', 'min:0.5', 'max:2.50'],
                    'weight' => ['required', 'numeric', 'min:10'],
                    'origin_country' => ['required'],
                    'play_country' => ['required'],
                    'sport' => ['required'],
                    'password' => ['required', 'min:6', 'confirmed'],
                    'birthDate' => ['required', 'date'],
                    'gender' => ['required'],
                ],
            );

            if ($data->fails()) {
                return response()->json([
                    'status' => 400,
                    'error' => $data->errors(),
                ]);
            }

            $validatedData = $data->validated();

                $hero->updated_at = now();

            $updateData = [
                'firstName' => $validatedData['firstName'],
                'lastName'=> $validatedData['lastName'],
                'shortName'=> $validatedData['shortName'],
                'height'=> $validatedData['height'],
                'weight'=> $validatedData['weight'],
                'origin_country'=> $validatedData['origin_country'],
                'play_country'=> $validatedData['play_country'],
                'sport'=> $validatedData['sport'],
                'password'=> $validatedData['password'],
                'birthDate'=> $validatedData['birthDate'],
                'gender'=> $validatedData['gender'],
            ];

            DB::table('heros')->where('id', $id)->update($updateData);

            return response()->json([
                'status' => 201,
                'message' => "Your Profile updated successfully.",
                'hero_id' => $id
            ]);
        } else {
            // return view('errors.error404');
            return response()->json([
                'status' => 404,
            ]);
        }
    
    }

    public function searchAboutHeroProfile(Request $request){
        if ($request->has('search')) {
            $search = $request->get('search');

            // Define the columns to select
            $columns = [
                'id',
                'firstName',
                'lastName',
                'fullName',
                'shortName',
                'height',
                'weight',
                'sport',
                'origin_country',
                'play_country',
                'birthDate',
                'gender',
                'auth_id',
            ];

            // Initialize the query
            $query = Hero::select($columns);

            // Apply filters based on the request parameters
            if (isset($search['firstName'])) {
                $query->where('firstName', 'like', '%' . $search['firstName'] . '%');
            }
            if (isset($search['lastName'])) {
                $query->where('lastName', 'like', '%' . $search['lastName'] . '%');
            }
            if (isset($search['fullName'])) {
                $query->where('fullName', 'like', '%' . $search['fullName'] . '%');
            }
            if (isset($search['shortName'])) {
                $query->where('shortName', 'like', '%' . $search['shortName'] . '%');
            }
            if (isset($search['sport'])) {
                $query->where('sport', 'like', '%' . $search['sport'] . '%');
            }
            if (isset($search['origin_country'])) {
                $query->where('origin_country', 'like', '%' . $search['origin_country'] . '%');
            }

            // Get the results
            $hero = $query->with('account')->get();

            // Return the results (or you can return a view, JSON, etc.)
            return response()->json($hero);
            // return view('hero.index', compact('hero'));
        }

        // If no search parameters are provided, return an empty result or a message
        return response()->json(['message' => 'No search parameters provided'], 400);
    }
}
