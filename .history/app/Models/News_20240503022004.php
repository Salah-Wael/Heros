<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'image',
    ];
    public function user() {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, 'news_tags', '', 'news_id');
    }

}
