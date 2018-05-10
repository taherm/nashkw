<?php

namespace App\Models;


class Color extends PrimaryModel
{
    protected $localeStrings = ['name'];

    public function product_attribute()
    {
        return $this->hasOne(ProductAttribute::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'product_attributes', 'product_id', 'color_id');
    }
}
