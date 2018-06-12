<?php

namespace App\Models;


class OrderMeta extends PrimaryModel
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Usage : backend - backend.order.ordermeta.index
     * Description : returns specific product related to orderMeta
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    /**
     * Description : each orderMeta for a product has Only One array of (size , color and quantity)
     * Usage : backend.order.ordermeta.index
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product_attribute()
    {
        return $this->belongsTo(ProductAttribute::class);
    }
}
