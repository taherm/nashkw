<?php

namespace App\Models;

use App\Services\Search\QueryFilters;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends PrimaryModel
{
    public $localeStrings = ['name', 'description'];
    protected $guarded = [''];
    use SoftDeletes;

    /**
     * * ParentCategory
     * reverse
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    /**
     * * ChildCategory
     * hasMany
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {

        return $this->hasMany(Category::class, 'parent_id');
    }

    /**
     * Category Product hasManyThrough ProductCategory
     * ManyToMany
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'category_product');
    }


    /**
     * @param $query
     * @param QueryFilter $filters
     * @return \Illuminate\Database\Eloquent\Builder
     * Usage : Category Page - Filtering all products according to parameters
     * Description : chaining filters within the Query String
     */
    public function scopeFilters($query, QueryFilters $filters)
    {
        return $filters->apply($query);
    }

    public function scopeOnlyParent($q)
    {
        return $q->where('parent_id', 0);
    }

    public function getIsParentAttribute()
    {
        return $this->parent_id === 0 ? true : false;
    }

}
