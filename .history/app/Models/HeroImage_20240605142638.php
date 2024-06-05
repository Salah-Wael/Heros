<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroImage extends Model
{
    use HasFactory;

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

    public function  hero() {
        return  $this->belongsTo(Hero::class);
    }
}
