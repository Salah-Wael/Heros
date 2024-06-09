<?php

namespace App\Http\Controllers\Api;

use App\Models\Bank;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

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
        // return view('support', compact('currencies'));
        return response()->json([
            'status' => 200,
            'currencies' => $currencies,
        ]);
    }

    public function pay(Request $request)
    {
        $data = Validator::make($request->all(), [
            'currency' => ['required'],
            'support' => ['required', 'numeric', 'min:50', 'digits_between:2,7'],
        ]);

        if ($data->fails()) {
            return response()->json($data->errors()->toJson(), 400);
        }

        // $validatedData = $data->validated();

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
            'success_url' => 'http://127.0.0.1:8000/api/success',
            'cancel_url' => 'https://example.com/cancel',
        ]);

        return redirect($session->url);
    }
    public function success(){
        // return redirect('support')->with('success', 'You have supported the hero successfully');
        return response()->json([
            'status' => 200,
            'success' => "You have supported the Hero successfully, Thanks to use Heros",
        ]);
    }
    
}
