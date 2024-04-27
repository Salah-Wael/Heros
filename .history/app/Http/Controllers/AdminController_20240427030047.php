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
        Hero::insert([
            'firstName'=>  request()->input("firstName"),
            'lastName'=> ,
            'fullName'=> ,
            'shortName'=> ,
            'email'=> ,
            'email_verified_at'=> ,
            'password'=> ,
            'paypalRequestLink'=> ,
            'bankLink'=> ,
            'birthDate'=> ,
            'gender'=> ,
        ]);
    }
}
