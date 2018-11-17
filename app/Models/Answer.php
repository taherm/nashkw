<?php

namespace App\Models;


class Answer extends PrimaryModel
{
    use ModelHelpers;
    protected $localeStrings = ['name'];
    protected $guarded = [''];

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }

    public function results()
    {
        return $this->hasMany(Answer::class);
    }
}
