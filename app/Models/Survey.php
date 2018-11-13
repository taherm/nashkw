<?php

namespace App\Models;


class Survey extends PrimaryModel
{
    protected $guarded = [''];
    protected $localeStrings = ['slug','description'];
    protected $casts = [
        'is_home' => 'boolean',
        'is_footer' => 'boolean',
        'is_desktop' => 'boolean',
        'active' => 'boolean'
    ];

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
