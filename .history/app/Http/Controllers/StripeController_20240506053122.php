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
    public function pay()
    {
        $session = $this->stripe->checkout->sessions->create(
            [
                line_items => [
                    price_data => [
                        currency => 'usd',
                        product_data => [
                            name => 'T-shirt',
                        ],
                    ],

                    unit_amount => 2000,

                    quantity => 1,
                ],
                mode => 'payment',
                # These placeholder URLs will be replaced in a following step.
                success_url => 'https://example.com/success',
                cancel_url => 'https://example.com/cancel',
            ]
        );
        return view('stripe.pay');
    }
}
