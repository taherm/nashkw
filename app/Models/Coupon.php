<?php

namespace App\Models;

class Coupon extends PrimaryModel
{
    protected $dates = ['created_at', 'updated_at','due_date'];
    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
