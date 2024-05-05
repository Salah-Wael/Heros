<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FawaterakController extends Controller
{
    public function generateHashKey($data)
    {
        $secretKey = "895f381069fd47c6ac9c87b0e906a16cac650be3ea13556205";
        $queryParam = "Domain=https://heros.rf.gd&ProviderKey=FAWATERAK.880";
        $hash = hash_hmac('sha256', $queryParam, $secretKey, false);
        return $hash;
    }
}
