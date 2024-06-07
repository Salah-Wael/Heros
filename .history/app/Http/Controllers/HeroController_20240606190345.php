<?php

namespace App\Http\Controllers;

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
        auth()->user()->role == 'hero';
        return view('hero.profile');
    }
    public  function editHeroProfile($id) {
        return view('hero.profile-edit');
    }

    public function se
}
