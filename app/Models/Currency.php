<?php

namespace App\Models;


class Currency extends PrimaryModel
{
    protected $guarded = [''];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
