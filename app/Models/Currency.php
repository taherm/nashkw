<?php

namespace App\Models;


class Currency extends PrimaryModel
{
    protected $guarded = [''];
    protected $localeStrings = ['currency_symbol', 'name'];
    protected $appends = ['symbol'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getSymbolAttribute()
    {
        $symbol = app()->isLocale('ar') ? 'currency_symbol_ar' : 'currency_symbol_en';
        return $this->$symbol;
    }
}
