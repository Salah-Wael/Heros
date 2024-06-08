<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AthleticsDataSet extends Model
{
    use HasFactory;

    protected $table = 'dataset_olympics';
    protected  $fillable = [
        'firstName',
        'lastName',
        'fullName',
        'shortName',
        'height',
        'weight',
        'sport',
        'origin_country',
        'play_country',
        'birthDate',
        'gender',
        'auth_id',
    ];
}
