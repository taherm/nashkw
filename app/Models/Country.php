<?php

namespace App\Models;



class Country extends PrimaryModel
{
    protected $localeStrings = ['name'];

    public function currency() {
        return $this->hasOne(Currency::class);
    }
}
