<?php

namespace App\Models;

use App\Model\Country;
use App\Model\PrimaryModel;

class Currency extends PrimaryModel
{
    protected $fillable = ['exchange_rate'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
