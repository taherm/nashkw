<?php

namespace App\Models;


class Image extends PrimaryModel
{
    protected $localeStrings = ['caption'];
    protected $guarded = [''];

    /**
     * Gallery Image
     * hasMany relation
     * reverse
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
