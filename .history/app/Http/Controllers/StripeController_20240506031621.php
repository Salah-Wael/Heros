<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public $stripe;

    public function __construct(){
        $this->stripe= new 
    }
    public function pay(){
        return view('stripe.pay');
    }
}
