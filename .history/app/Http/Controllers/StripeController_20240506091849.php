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
    public function stripe()
    {
        $currencies = Bank::find(2)->currencies;
        return view('support', compact('currencies'));
    }

    public function pay(Request $request)
    {
        $validatedData = $request->validate([
            'currency' => ['required'],
            'support' => ['required', 'numeric', 'digits_between:2,20'],
        ]);

        $id = $this->stripe->products->create([
            'name' => 'Support',
        ])->id;

        $price = $this->stripe->prices->create([
            'currency' => $request->currency,
            'unit_amount' => 100 * $request->support,
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
            'success_url' => redirect('http://127.0.0.1:8000/support')->with('success', 'You have supportedsuccessfully logged in as admin'),
            'cancel_url' => 'https://example.com/cancel',
        ]);

        return redirect($session->url);
    }
}
