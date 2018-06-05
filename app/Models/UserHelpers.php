<?php

namespace App\Models;

use Carbon\Carbon;

trait UserHelpers
{
    public function getIsAdminAttribute()
    {
        return $this->id === 1 ? true : false;
    }
}