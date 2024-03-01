<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Srmklive\PayPal\Services\PayPalRequestException;

class PaymentController extends Controller
{
    public function handlePayment(Request $request)
    {
        try {
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();
            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('success.payment'),
                    "cancel_url" => route('cancel.payment'),
                ],

                "purchase_units" => [
                    [
                        "reference_id" => "REFID-1",
                        // "payee" => [
                        //     "email_address" => "merchant@example.com"
                        // ],
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => "108.00"
                        ],

                        ],
                        [
                        "reference_id" => "REFID-2",
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => "9480.00"
                        ],
                        ],
                ]




            ]);
            // dd($response['links']);

            if (isset($response['links'])) {
                foreach ($response['links'] as $links) {
                    if ($links['rel'] == 'approve') {
                        return redirect()->away($links['href']);
                    }
                }
                return redirect()
                    ->route('cancel.payment')
                    ->with('error', 'Unexpected response from PayPal: links key not found');
            } else {
                return redirect()
                    ->route('create.payment')
                    ->with('error', 'Unexpected response from PayPal: links key not found');
            }
        } catch (\Exception $exception) {
            // Handle PayPal API exceptions here
            return redirect()
                ->route('create.payment')
                ->with('error', 'PayPal API error: ' . $exception->getMessage());
        }
    }


    public function paymentCancel()
    {
        return redirect()
            ->route('create.payment')
            ->with('error', 'You have canceled the transaction.');
    }

    public function paymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        // dd($response );
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('create.payment')
                ->with('success', 'Transaction complete.');
        } else {
            // dd($response['message']);
            return redirect()
                ->route('create.payment')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    
}
