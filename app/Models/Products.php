<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_prodcuct', 'description_product', 'price', 'qty'
    ];

    public function categories(): HasOne
    {
        return $this->hasOne(Category::class, 'id_category', 'id');
    }
}
