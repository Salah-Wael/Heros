<?php

namespace App\Models;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bank extends Model
{
    use HasFactory;

    public function bank()
    {
        return $this->belongsToMany(Currency::class, 'banks_currencies', 'bank_id', 'currency_id');
    }
}
