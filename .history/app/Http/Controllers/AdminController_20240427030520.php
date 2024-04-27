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
        HeroesRequest::where('id',$id)->update(['status'=>'accepted']);
        $hero = new Hero();
        $hero->name = HeroesRequest::find($id)['name'];
        Hero::insert([
            'firstName'=> HeroesRequest::find($id)['name'],
            'lastName'=> HeroesRequest::find($id)['name'],
            'fullName'=> HeroesRequest::find($id)['name'],
            'shortName'=> HeroesRequest::find($id)['name'],
            'email'=> HeroesRequest::find($id)['name'],
            'email_verified_at'=> now(),
            'password'=> HeroesRequest::find($id)['name'],
            'paypalRequestLink'=> HeroesRequest::find($id)['name'],
            'bankLink'=> HeroesRequest::find($id)['name'],
            'birthDate'=> HeroesRequest::find($id)['name'],
            'gender'=> HeroesRequest::find($id)['name'],
        ]);
    }
}
