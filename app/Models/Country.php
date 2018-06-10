<?php

namespace App\Models;



class Country extends PrimaryModel
{
    protected $localeStrings = ['name'];
    protected $guarded = [''];

    public function currency() {
        return $this->hasOne(Currency::class);
    }
}
