<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OlympicsDataSet extends Model
{
    use HasFactory;

    protected $table = 'dataset_olympics';
    protected  $fillable = [

        
year	
games_type	
host_country	
host_city	
athletes	
teams	
competitions	
country	
gold	
silver	
bronze
    ];
}
