<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeroController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function heroHome() {
    if(auth()->user()->role == 'hero'){
        return view('hero.home');
    }
    return view('errors.error404');
    }

    public function heroProfile($id) {
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

            // Initialize the query
            $query = Hero::query();

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
            $heroes = $query->get();

            // Return the results (or you can return a view, JSON, etc.)
            return response()->json($heroes);
        }

        // If no search parameters are provided, return an empty result or a message
        return response()->json(['message' => 'No search parameters provided'], 400);
    }
}
