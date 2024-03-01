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
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);
    }

    public function cancelDeposit(){

    }

    public function successDeposit(){

    }
}
