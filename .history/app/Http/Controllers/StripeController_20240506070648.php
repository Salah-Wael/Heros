<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;

class StripeController extends Controller
{
    public $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(
            config('stripe.api_key.secret')
        );
    }
    public function test()
    {
        return view('support');
    }

    public function pay()
    {
        $id = $this->stripe->products->create([
            'name' => 'My Product',
        ])->id;

        $price = $this->stripe->prices->create([
            'currency' => 'usd',
            'unit_amount' => 1000,
        ])->id;



        $session = $this->stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price' => $price,
                    'quantity' => 1,
                ],
                
            ],
            'mode' => 'payment',
            // # These placeholder URLs will be replaced in a following step.
            'success_url' => 'https://example.com/success',
            // 'cancel_url' => 'https://example.com/cancel',
        ]);

        return redirect($session->url);
    }
}
