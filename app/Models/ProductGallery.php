<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'image_product'
    ];

    public function products(): BelongsTo
    {
        return $this->belongsTo(Products::class, 'id_product', 'id');
    }
}