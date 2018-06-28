<?php

namespace App\Models;


class ProductAttribute extends PrimaryModel
{
    protected $guarded = [''];
    protected $localeStrings = ['notes'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function getSizeNameAttribute()
    {
        return $this->size->name;
    }

    public function getColorNameAttribute()
    {
        return $this->color->name;
    }
}
