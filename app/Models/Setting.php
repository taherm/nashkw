<?php

namespace App\Models;


class Setting extends PrimaryModel
{
    protected $localeStrings = ['name','address','country', 'company'];
    protected $guarded = [''];
}
