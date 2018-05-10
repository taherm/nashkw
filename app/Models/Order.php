<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends PrimaryModel
{
    use SoftDeletes;

    /**
     * Order OrderMeta
     * hasMany
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function order_metas()
    {
        return $this->hasMany(OrderMeta::class, 'order_id');
    }


    /**
     * User Order
     * hasMany
     * reverse
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Src\User\User');
    }


    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_metas', 'order_id', 'product_id');
    }


    public function scopeOfStatus($query, $type)
    {
        return $query->where('status', $type);

    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class, 'coupon_id');
    }
}
