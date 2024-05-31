<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public function banks()
    {
        return $this->belongsToMany(Bank::class, 'banks_currencies', 'currency_id', 'bank_id');
    }
}
