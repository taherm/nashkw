<?php

namespace App\Models;

class Product extends PrimaryModel
{
    protected $localeStrings = ['name','description','notes'];
    protected $guarded = [''];
    /**
     * MorphRelation
     * MorphOne = many hasONe relation
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function gallery()
    {
        return $this->morphOne(Gallery::class, 'galleryable');
    }



    /**
     * Product Attribute
     * hasMany Relation
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product_attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    /**
     * Usage : product belongs to one order_meta
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order_meta()
    {
        return $this->belongsTo(OrderMeta::class);
    }

    /**
     * ManyToMany Relation
     * Product Color
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function colors()
    {
        return $this->belongsToMany(Color::class, 'product_attributes', 'product_id', 'color_id');
    }


    /**
     * ManytoMany Relation
     * Product Size
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_attributes', 'product_id', 'size_id');
    }
}
