<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public function bank()
    {
        return $this->belongsToMany(Tag::class, 'news_tags', 'news_id', 'tag_id');
    }
    public function currency()
    {
        return $this->belongsToMany(Currency::class, 'banks_currencies', 'currency_id', 'bank_id');
    }
}
