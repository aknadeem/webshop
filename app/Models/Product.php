<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    public function variants(): HasMany
    {
        return $this->hasMany(ProductVariant::class, 'product_id');
    }

    public function image(): HasOne
    {
        return $this->hasOne(ProductImage::class, 'product_id')
            ->ofMany('featured', 'max');
    }
    public function productImages(): HasMany
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }
}
