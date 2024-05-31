<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Stripe\StripeClient;
use Illuminate\Http\Request;

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
        $currencies = Bank::find(2)->currencies;

        return view('support', compact('currencies'));
    }

    public function pay(Request $request)
    {
        $validatedData = $request->validate([
            'currency' => ['required'],
            'currency' => ['required','min:10'],
        ]);

        $id = $this->stripe->products->create([
            'name' => 'Support',
        ])->id;

        $price = $this->stripe->prices->create([
            'currency' => $request->currency,
            'unit_amount' => 100,
            'product' => $id,
        ])->id;



        $session = $this->stripe->checkout->sessions->create([
            'line_items' => [
                [
                    // 'images' => '',
                    'quantity' => 1,
                    'price' => $price,

                ],
            ],

            'mode' => 'payment',
            // # These placeholder URLs will be replaced in a following step.
            'success_url' => 'https://example.com/success',
            'cancel_url' => 'https://example.com/cancel',
        ]);

        return redirect($session->url);
    }
}
