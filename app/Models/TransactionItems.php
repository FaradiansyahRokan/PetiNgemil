<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionItems extends Model
{
    use HasFactory, SoftDeletes;

    public function transactions() :BelongsTo {
        return $this->belongsTo(Transactions::class, 'id_transaction', 'id');
    }

    public function products() :HasMany {
        return $this->hasMany(Products::class, 'id_product', 'id');
    }
}
