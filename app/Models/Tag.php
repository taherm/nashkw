<?php

namespace App\Models;

class Tag extends PrimaryModel
{
    protected $localeStrings = ['slug'];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tag');
    }
}
