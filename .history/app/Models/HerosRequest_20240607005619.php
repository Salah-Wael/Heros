<?php

namespace App\Models;

use App\Models\HeroRequestBank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HerosRequest extends Model
{
    use HasFactory;
    use SoftDeletes;
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

    public function images()
    {
        return $this->hasMany(HeroRequestImage::class, 'heros_requests_id');
    }

    public function accounts()
    {
        return $this->hasMany(HeroRequestBank::class, 'hero_request_id');
    }
}
