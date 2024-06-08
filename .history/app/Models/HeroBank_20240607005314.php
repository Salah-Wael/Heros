<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroBank extends Model
{
    use HasFactory;

    protected  $fillable = [
        account	bank_id	hero_id
        'account',
        'hero_id',
    ];

    public function  hero() {
        return  $this->belongsTo(Hero::class);
    }
}