<?php
namespace App\Services\Search;

use App\Models\Governate;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 2/7/17
 * Time: 8:40 AM
 */
class Filters extends QueryFilters
{
    public function __construct(Request $request, User $user)
    {
        parent::__construct($request);
    }

    public function text($search)
    {
        $this->builder->where(function ($q) use ($search) {
            $q->where('name_ar', 'like', "%{$search}%")
                ->orWhere('name_en', 'like', "%{$search}%")
                ->orWhere('keywords', 'like', "%{$search}%")
                ->orWhere('description_ar', 'like', "%{$search}%")
                ->orWhere('description_en', 'like', "%{$search}%")
                ->orWhere('services_ar', 'like', "%{$search}%")
                ->orWhere('services_en', 'like', "%{$search}%")
                ->orWhere('offer_description_ar', 'like', "%{$search}%")
                ->orWhere('offer_description_en', 'like', "%{$search}%");
        });
    }

    public function category_id()
    {
        $this->builder->where('category_id', request()->category_id);
    }

    public function country_id()
    {
        $this->builder->where('country_id', request()->country_id);
    }

    public function role_id()
    {
        return $this->builder->where('role_id', request()->role_id);
    }

    public function governate_id()
    {
        return $this->builder->where('governate_id', request()->governate_id);
    }

    public function area_id()
    {
        // searching area id only for branches
        // if i added orWhereHas it will fetch the whole companies without the above filters
        return $this->builder->whereHas('branches', function ($q) {
            return $q->where('area_id', request()->area_id);
        }, '>=', 1);
    }


}