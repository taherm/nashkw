<?php

namespace App\Models;

class Favorite extends PrimaryModel
{
    protected $guarded = [''];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
