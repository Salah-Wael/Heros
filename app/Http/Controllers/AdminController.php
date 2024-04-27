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
            'firstName'=> HerosRequest::find($id)['firstName'],
            'lastName'=> HerosRequest::find($id)['lastName'],
            'fullName'=> HerosRequest::find($id)['fullName'],
            'shortName'=> HerosRequest::find($id)['shortName'],
            'email'=> HerosRequest::find($id)['email'],
            'email_verified_at'=> now(),
            'password'=> HerosRequest::find($id)['password'],
            'paypalRequestLink'=> HerosRequest::find($id)['paypalRequestLink'],
            'bankLink'=> HerosRequest::find($id)['bankLink'],
            'birthDate'=> HerosRequest::find($id)['birthDate'],
            'gender'=> HerosRequest::find($id)['gender'],
        ]);
    }
}
