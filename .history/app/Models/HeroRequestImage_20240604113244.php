<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroRequestImage extends Model
{
    public function  hero()
    {
        return  $this->belongsTo(Hero::class);
    }
}
