<?php

namespace App\Http\Controllers;

use App\Models\Currency;
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
        // $bankName = "Fawaterk";

        // $currencies = Currency::whereHas('bank', function ($query) use ($bankName) {
        //     $query->where('name', $bankName); // Assuming 'name' is the column that holds the bank name
        // })->get();
        // dd($currencies);

        // $currencies = Currency::all();

        return view('support', compact('currencies'));
    }

    public function pay(Request $request)
    {
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
