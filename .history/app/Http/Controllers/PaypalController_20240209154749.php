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
]



    public function cancelDeposit(){

    }

    public function successDeposit(){

    }
}
