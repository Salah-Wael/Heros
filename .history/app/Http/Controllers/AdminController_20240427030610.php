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
        $herosRequest= HerosRequest::get();
        return view('admin.heros_request',compact( 'herosRequest'));
    }

    public function deleteHeroRequest($id){

    }
    public function addToHerosTable($id){
        HerosRequest::where('id',$id)->update(['status'=>'accepted']);
        $hero = new Hero();
        $hero->name = HerosRequest::find($id)['name'];
        Hero::insert([
            'firstName'=> HerosRequest::find($id)['name'],
            'lastName'=> HerosRequest::find($id)['name'],
            'fullName'=> HerosRequest::find($id)['name'],
            'shortName'=> HerosRequest::find($id)['name'],
            'email'=> HerosRequest::find($id)['name'],
            'email_verified_at'=> now(),
            'password'=> HerosRequest::find($id)['name'],
            'paypalRequestLink'=> HerosRequest::find($id)['name'],
            'bankLink'=> HerosRequest::find($id)['name'],
            'birthDate'=> HerosRequest::find($id)['name'],
            'gender'=> HeroesRequest::find($id)['name'],
        ]);
    }
}
