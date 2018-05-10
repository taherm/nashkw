<?php

namespace App\Models;

use App\Services\Traits\LocaleTrait;

class Size extends PrimaryModel
{
    use LocaleTrait;
    protected $localeStrings = ['name'];

    public function product_attribute()
    {
        return $this->hasOne(ProductAttribute::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'product_attributes', 'product_id', 'size_id');
    }
}
