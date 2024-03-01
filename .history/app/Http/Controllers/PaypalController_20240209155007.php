<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaypalController extends Controller
{
    public function deposit(){
        $provider = new ExpressCheckout();
        $data =[];
        $data['items']= [
            'name ' =>'Appte',
            'price ' =>'Appte',
            'description ' =>'Appte'
        ];
        $response = $provider->setExpressCheckout($data);
        return redirect($response['paypal_link']);
        $data t'
invoice_idi) = 1;
$data t invoice_description )
$data(' return_urt') z route( 'payment.sucess');
$data t cancel_url ' )
= route(
= "Order Invoice";
payment. sucespj;



    }

    public function cancelDeposit(){

    }

    public function successDeposit(){

    }
}
