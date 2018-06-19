<?php

namespace App\Models;

class Tag extends PrimaryModel
{
    protected $localeStrings = ['slug'];
    protected $guarded = [''];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_tag');
    }
}
