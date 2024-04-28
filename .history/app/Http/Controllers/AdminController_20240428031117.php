<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\HerosRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function herosRequest() {
        $herosRequest = HerosRequest::select('firstName as first_name',
            'lastName as first_name', 'fullName', 'shortName', 'height', 'weight', 'sport', 'origin_country', 'play_country', 'birthDate', 'gender')->get();

        return view('admin.heros_request',compact( 'herosRequest'));
    }

    public function deleteHeroRequest($id){
        HerosRequest::findOrFail($id)->delete();
    }
    public function insertIntoHerosTable($id)
    {
        $hero = new Hero();
        Hero::insert([
            'firstName'=> HerosRequest::find($id)['firstName'],
            'lastName'=> HerosRequest::find($id)['lastName'],
            'fullName'=> HerosRequest::find($id)['fullName'],
            'shortName'=> HerosRequest::find($id)['shortName'],
            'height' => HerosRequest::find($id)['height'],
            'weight	' => HerosRequest::find($id)['weight'],
            'sport' => HerosRequest::find($id)['sport'],
            'origin_country' => HerosRequest::find($id)['origin_country'],
            'play_country' => HerosRequest::find($id)['play_country'],
            'birthDate'=> HerosRequest::find($id)['birthDate'],
            'gender'=> HerosRequest::find($id)['gender'],
        ]);
    }

    // public function
}
