<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;

class StripeController extends Controller
{
    public $stripe;

    public function __construct(){
        $this->stripe= new StripeClient(
            config('stripe.api_key.secret')
        );
    }
    public function pay(){
        $session= $this->stripe->che
        return view('stripe.pay');
    }
}
