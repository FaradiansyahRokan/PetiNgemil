<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Review extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'text_review'
    ];

    public function products(): HasMany
    {
        return $this->hasMany(Products::class, 'id_product', 'id');
    }

    public function users(): HasOne
    {
        return $this->hasOne(User::class, 'id_user', 'id');
    }
}
