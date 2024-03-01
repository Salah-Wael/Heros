<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function deposit(){
        $data =[];
        $data['items'] = [
            'name ' =>'Appte',
            'price ' =>'Appte',
            'description ' =>'Appte'
        ];
        $data['invoice_id'] = 1;
        $data['return_url'] = route('deposit.success');
        $data['cancel_url'] = route('deposit.cancel');
        $data['deposit'] = 100;

        $provider = new ExpressCheckout();
        $provider = new ExpressCheckout();
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data,true);
        return redirect($response['paypal_link']);
    }

    public function cancelDeposit(){
        return  redirect('/support')->with("cancel", "You're cancelled😔");
    }

    public function successDeposit(){
        return  redirect('/support')->with("success", "successfully! ,thank you for your support❤️");
    }
}
