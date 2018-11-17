<?php

namespace App\Models;

class Questionnaire extends PrimaryModel
{
    use ModelHelpers;
    protected $guarded = [''];

    public function results()
    {
        return $this->hasMany(Result::class);
    }
}
