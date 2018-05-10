<?php

namespace App\Models;

class Terms extends PrimaryModel
{
    protected $table = 'conditions';
    protected $guarded = [''];
    public $localeStrings = ['title','body'];
}
