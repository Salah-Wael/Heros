<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FawaterakController extends Controller
{
    public function generateHashKey($data)
    {
        $secretKey = "FAWATERAK_VENDOR_KEY";
        $queryParam = "Domain=https://heros.rf.gd/&ProviderKey=FAWATERAK_PROVIDER_KEY";
        $hash = hash_hmac('sha256', $queryParam, $secretKey, false);
        return $hash;
    }
}
