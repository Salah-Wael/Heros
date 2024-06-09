<?php

namespace App\Http\Controllers\Api;

use App\Models\Bank;
use App\Models\Hero;
use Stripe\StripeClient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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

    public function searchAboutHeroToSupport(Request $request){
        if ($request->has('search')) {
            $search = $request->get('search');

            // Define the columns to select
            $columns = [
                'id',
                'firstName',
                'lastName',
                'fullName',
                'shortName',
                'height',
                'weight',
                'sport',
                'origin_country',
                'play_country',
                'birthDate',
                'gender',
                'auth_id',
            ];

            // Initialize the query
            $query = Hero::select($columns);

            // Apply filters based on the request parameters
            if (isset($search['firstName'])) {
                $query->where('firstName', 'like', '%' . $search['firstName'] . '%');
            }
            if (isset($search['lastName'])) {
                $query->where('lastName', 'like', '%' . $search['lastName'] . '%');
            }
            if (isset($search['fullName'])) {
                $query->where('fullName', 'like', '%' . $search['fullName'] . '%');
            }
            if (isset($search['shortName'])) {
                $query->where('shortName', 'like', '%' . $search['shortName'] . '%');
            }
            if (isset($search['sport'])) {
                $query->where('sport', 'like', '%' . $search['sport'] . '%');
            }
            if (isset($search['origin_country'])) {
                $query->where('origin_country', 'like', '%' . $search['origin_country'] . '%');
            }

            // Get the results
            $hero = $query->with('account')->get();

            // Return the results (or you can return a view, JSON, etc.)
            return response()->json($hero);
            // return view('hero.index', compact('hero'));
        }

        // If no search parameters are provided, return an empty result or a message
        return response()->json(['message' => 'No search parameters provided'], 400);
    }
    }

