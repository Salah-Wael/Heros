<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroRequestImage extends Model
{

    protected  $fillable = [
        'image',
        'heros_requests_id',
        image	heros_requests_id
    ];
    public function  hero()
    {
        return  $this->belongsTo(HerosRequest::class);
    }
}
