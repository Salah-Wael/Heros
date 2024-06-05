<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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
        'auth_id'

    ];

    public function image()
    {
        return $this->hasMany(HeroRequestImage::class, 'heros_requests_id');
    }
}
