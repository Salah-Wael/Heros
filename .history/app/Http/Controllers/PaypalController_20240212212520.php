<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Srmklive\PayPal\Services\PayPalRequestException;

class PaypalController extends Controller
{
    public function payment(){
        $data =[];
        $data['items'] = [
            'name' =>'Apple',
            'price' =>1000,
            'description' =>'14 inch'
        ];
        $data['invoice_id'] = 1;
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');
        $data['payment'] = 100;

        $provider = new ExpressCheckout();
        $provider->setApiCredentials(config('paypal.credentials')); // Make sure the credentials are correct
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data,true);
        return redirect($response['paypal_link']);
    }

    public function cancel(){
        return  redirect('/support')->with("cancel", "You're cancelled😔");
    }

    public function successDeposit(Request $request){
        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($request->token);

        if(in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'] )){
            return  redirect('/support')->with("successDeposit", "successfully! ,thank you for your support❤️");
        }
        return  redirect('/support')->with("tryDeposit", "Please, try again later🤦‍♂️😔");
    }
}
