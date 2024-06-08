<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Models\OlympicsDataSet;
use App\Models\AthleticsDataSet;
use App\Http\Controllers\Controller;

class DataSetController extends Controller
{
    public function historyOfOlympics(){
        $olympics = OlympicsDataSet::all();
    }

    public function historyOfAthletics(){
        $athletics = AthleticsDataSet::all();
    }
}
