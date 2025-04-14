<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Payment extends Model
{
    use HasFactory;

    public function transactions(): HasMany 
    {
        return $this->hasMany(Transaction::class);
    }
}
