<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FawaterakController extends Controller
{
    function generateHashKey($data)
    {
        $secretKey = "FAWATERAK_VENDOR_KEY";
        $queryParam = "Domain=YOUR_WEBSITE_DOMAIN&ProviderKey=FAWATERAK_PROVIDER_KEY";
        $hash = hash_hmac('sha256', $queryParam, $secretKey, false);
        return $hash;
    }
}
