<?php

namespace App\Models;

class Branch extends PrimaryModel
{
    protected $guarded = [''];
    protected $localeStrings = ['name','address'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function country() {
        return $this->belongsTo(Country::class);
    }
}
