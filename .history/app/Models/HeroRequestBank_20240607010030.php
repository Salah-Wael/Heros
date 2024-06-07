<?php

namespace App\Models;

use App\Models\HerosRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HeroRequestBank extends Model
{
    use HasFactory;

    protected $table='hero_request_banks';

    protected  $fillable = [
        'account',
        'bank_id',
        'hero_id',
    ];

    public function  hero()
    {
        return  $this->belongsTo(HerosRequest::class);
    }
}
