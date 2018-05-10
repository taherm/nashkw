<?php

namespace App\Models;


class Policy extends PrimaryModel
{
    protected $guard = [''];
    public $localeStrings = ['title','body'];
}
