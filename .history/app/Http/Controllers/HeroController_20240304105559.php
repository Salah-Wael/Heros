<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function __
    public function heroHome() {
    if(auth()->user()->role == 'hero'){
        return view('hero.home');
    }else{
        return view('errors.error404');
    }
    }


}
