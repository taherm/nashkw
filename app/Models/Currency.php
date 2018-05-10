<?php

namespace App\Models;


class Currency extends PrimaryModel
{
    protected $fillable = ['exchange_rate'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
