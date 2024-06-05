<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroImage extends Model
{
    use HasFactory;

    protected  $fillable = [
        'auth_id',
    ];

    public function  hero() {
        return  $this->belongsTo(Hero::class);
    }
}
