<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AthleticsDataSet extends Model
{
    use HasFactory;

    protected $table = 'dataset_olympics';
    protected  $fillable = [
        'Name'
        'gender'
        Age
        Height
        Weight
        Team
        NOC
        Games
        Year
        games_type
        host_city
        Sport
        Event
        Medal
        'auth_id',
    ];
}
