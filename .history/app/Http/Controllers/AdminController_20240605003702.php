<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\HerosRequest;
use Illuminate\Http\Request;
use Illuminate\Testing\Constraints\SoftDeletedInDatabase;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function archivedHerosRequest()
    {
        $herosRequest = HerosRequest::onlyTrashed()->select(
            'id',
            'firstName as first name',
            'lastName as last name',
            'fullName as full name',
            'shortName as short name',
            'height',
            'weight',
            'sport',
            'origin_country',
            'play_country',
            'birthDate as birth_date',
            'gender'
        )->get();

        return view('admin.archived_heros_request', compact('herosRequest'));
    }
    public function herosRequest() {
        $herosRequest = HerosRequest::select(
            'id',
            'firstName as first name',
            'lastName as last name',
            'fullName as full name',
            'shortName as short name',
            'height',
            'weight',
            'sport',
            'origin_country',
            'play_country',
            'birthDate as birth date',
            'gender'
        )->get();

        return view('admin.heros_request',compact( 'herosRequest'));
    }

    public function deleteHeroRequest($id){
        HerosRequest::findOrFail($id)->delete();
        return redirect()->back()->with("success", "archived Successfully");
    }
    public function resotreHeroRequest($id)
    {
        $herosRequest = HerosRequest::withTrashed()->where('id', $id)->restore();
        return redirect()->back()->with("success", "Unarchived Successfully");
    }
    public function forceDeleteHeroRequest($id)
    {
        $herosRequest = HerosRequest::withTrashed()->where('id', $id)->forceDelete();
        return redirect()->back()->with("success", "Deleted Successfully");
    }
    public function insertIntoHerosTable($id)
    {
        // $hero = new Hero();
        Hero::create([
            'firstName'=> HerosRequest::find($id)['firstName'],
            'lastName'=> HerosRequest::find($id)['lastName'],
            'fullName'=> HerosRequest::find($id)['fullName'],
            'shortName'=> HerosRequest::find($id)['shortName'],
            'height' => HerosRequest::find($id)['height'],
            'weight' => HerosRequest::find($id)['weight'],
            'sport' => HerosRequest::find($id)['sport'],
            'origin_country' => HerosRequest::find($id)['origin_country'],
            'play_country' => HerosRequest::find($id)['play_country'],
            'birthDate'=> HerosRequest::find($id)['birthDate'],
            'gender'=> HerosRequest::find($id)['gender'],
        ]);

        H
    }

    // public function
}
