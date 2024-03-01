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
            'description ' =>'Appte',
    'price'
    'description'
]

$data t
invoice_idi) = 1;
'Macbook pro 14 inch',
$data t invoice_description )
= "Order Invoice";
$data[' return_url') z route( •payment.sucess');
payment. sucesP);
$data t cancel_url ' )
= route( '
    }

    public function cancelDeposit(){

    }

    public function successDeposit(){

    }
}
