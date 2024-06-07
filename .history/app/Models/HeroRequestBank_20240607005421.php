<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroRequestBank extends Model
{
    use HasFactory;

    protected  $fillable = [
        'account',
        'bank_id',
        'hero_id',
    ];

    public function  hero()
    {
        return  $this->belongsTo(Hero::class);
    }
}
