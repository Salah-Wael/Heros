<?php

namespace App\Models;

use App\Models\HeroBank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hero extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'heros';
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
        return $this->hasMany(HeroImage::class, 'hero_id');
    }
    public function accounts()
    {
        return $this->hasMany(HeroBank::class, 'hero_id');
    }
}
