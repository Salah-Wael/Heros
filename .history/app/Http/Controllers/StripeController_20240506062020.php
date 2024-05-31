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
    public function test(){
        return view('support');
    }

    public function pay()
    {
        $session = $this->stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => 2000,
                        'product_data' => [
                            'name' => 'Support hero',
                            'images' => 'data:image/jpeg;base64,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',
                        ],
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            // # These placeholder URLs will be replaced in a following step.
            'success_url' => 'https://example.com/success',
            // 'cancel_url' => 'https://example.com/cancel',
        ]);

        // $session = $this->stripe->checkout->sessions->create([
        //         'line_items' => [
        //             'price_data' => [
        //                 'currency' => 'usd',
        //                 'unit_amount' => 2000,

        //                 'product_data' => [
        //                     'name' => 'T-shirt',
        //                 ],

        //             ],

        //             'quantity' => 1,
        //         ],
        //         'mode' => 'payment',
        //         // # These placeholder URLs will be replaced in a following step.
        //         // 'success_url' => 'https://example.com/success',
        //         // 'cancel_url' => 'https://example.com/cancel',
        // ]);
        return redirect($session->url);
    }
}
