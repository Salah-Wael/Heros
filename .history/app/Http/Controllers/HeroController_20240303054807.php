<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function hero() {
    if(auth()->user()->role == 'hero'){
        return view('hero.home');
    }else{
        return view('errors.error404');
    }
    })->name('hero');
}
