<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable= [
        'tag'
    ];

    const CREATED_AT= n;
    const UPDATED_AT= false;
}
