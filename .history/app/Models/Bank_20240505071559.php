<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    public function bank()
    {
        return $this->belongsToMany(C::class, 'news_tags', 'news_id', 'tag_id');
    }
}
