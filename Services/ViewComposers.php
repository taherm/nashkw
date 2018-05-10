<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Color;
use App\Models\Setting;
use App\Models\Country;
use App\Models\Field;
use App\Models\Group;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Role;
use App\Models\Size;
use Illuminate\View\View;

class ViewComposers
{
    public function getRoles(View $view) {
        $roles = Role::where('id','!=', 1 )->get();
        return $view->with(compact('roles'));
    }

    public function getCategories(View $view) {
        $categories = Category::active()->get();
        return $view->with(compact('categories'));
    }

    public function getCountries(View $view) {
        $countries = Country::active()->get();
        return $view->with(compact('countries'));
    }

    public function getSettings(View $view) {
        $settings = Setting::first();
        return $view->with(compact('settings'));
    }
}

