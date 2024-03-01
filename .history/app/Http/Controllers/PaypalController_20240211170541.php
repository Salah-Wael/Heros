<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function deposit(){
        $data =[];
        $data['items'] = [
            'name' =>'Apple',
            'price ' =>1000,
            'description ' =>'Appte'
        ];
        $data['invoice_id'] = 1;
        $data['return_url'] = route('deposit.success');
        $data['cancel_url'] = route('deposit.cancel');
        $data['deposit'] = 100;

        $provider = new ExpressCheckout();
        $provider->setApiCredentials(config('paypal.credentials')); // Make sure the credentials are correct
        $provider->setCurrency('USD');
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data,true);
        return redirect($response['paypal_link']);
    }

    public function cancelDeposit(){
        return  redirect('/support')->with("cancelDeposit", "You're cancelled😔");
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
