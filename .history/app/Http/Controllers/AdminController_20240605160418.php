<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\User;
use App\Models\HerosRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $herosRequest = HerosRequest::with('images')->select(
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
            'gender',
            'auth_id'
        )->get();//->join('hero_request_images',)

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
        $herosRequest = HerosRequest::where('id', $id);
        dd($herosRequest);
        // foreach ($request->file('images') as $image) {
        //     File::delete(public_path('assets/images/HerosImages') . $herosRequest->images);
        // }
        HerosRequest::withTrashed()->where('id', $id)->forceDelete();
        
        return redirect()->back()->with("success", "Deleted Successfully");
    }
    public function insertIntoHerosTable($id)
    {
        $heroRequest = HerosRequest::find($id);

        if ($heroRequest) {
            Hero::create([
                'firstName' => $heroRequest->firstName,
                'lastName' => $heroRequest->lastName,
                'fullName' => $heroRequest->fullName,
                'shortName' => $heroRequest->shortName,
                'height' => $heroRequest->height,
                'weight' => $heroRequest->weight,
                'sport' => $heroRequest->sport,
                'origin_country' => $heroRequest->origin_country,
                'play_country' => $heroRequest->play_country,
                'birthDate' => $heroRequest->birthDate,
                'gender' => $heroRequest->gender,
                'auth_id' => $heroRequest->auth_id,
            ]);

            User::findOrFail($heroRequest->auth_id)->update(['role' => 'hero']);

            HerosRequest::withTrashed()->where('id', $id)->forceDelete();

            return redirect()->back()->with("success", "Added Successfully");
        } else {
            // Handle the case where the record is not found
            return redirect()->back()->with("error", "Hero Request not found");
        }
        

    }
}
