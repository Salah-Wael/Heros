<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function deposit(){
        $provider = new ExpressCheckout();
        $data =[];
        $data['items'] = [
            'name ' =>'Appte',
            'price ' =>'Appte',
            'description ' =>'Appte'
        ];
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);
        $data['invoice_id'] = '';
    $data['return_url'] = route('');
        $data['cancel_url'] = '';



    }

    public function cancelDeposit(){

    }

    public function successDeposit(){

    }
}
