<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function heroHome() {
    if(auth()->user()->role == 'hero'){
        return view('hero.home');
    }
    return view('errors.error404');
    }

    public function heroProfile($id) {
        $hero= Hero::wi
        auth()->user()->role == 'hero';
        return view('hero.profile');
    }
    public  function editHeroProfile($id) {
        return view('hero.profile-edit');
    }


    public function searchAboutHeroProfile(Request $request)
    {
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
                'auth_id'
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
            $hero = $query->with('images')->get();

            // Return the results (or you can return a view, JSON, etc.)
            // return response()->json($hero);
            return view('hero.index', compact('hero'));
        }

        // If no search parameters are provided, return an empty result or a message
        return response()->json(['message' => 'No search parameters provided'], 400);
    }
}

