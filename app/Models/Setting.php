<?php

namespace App\Models;


class Setting extends PrimaryModel
{
    protected $localeStrings = ['address','country', 'company'];
    protected $guarded = [''];
}
