<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Color;
use App\Models\Contactus;
use App\Models\Currency;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Country;
use App\Models\Field;
use App\Models\Group;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Role;
use App\Models\Size;
use App\Models\Slider;
use Illuminate\View\View;

class ViewComposers
{


    public function getCart(View $view)
    {
        $cart = session()->get('cart');
        return $view->with(compact('cart'));
    }

    public function getCartCount(View $view)
    {
        $cart = session()->get('cart');
        $cartCount = $cart ? $cart->count() : 0;
        return $view->with(compact('cartCount'));
    }

    public function getCurrency(View $view)
    {
        $currency = session()->get('currency');
        return $view->with(compact('currency'));
    }

    public function getCurrencies(View $view)
    {
        if (!session()->has('currencies')) {
            session()->put('currencies', Currency::active()->get());
        }
        $currencies = session()->get('currencies');
        return $view->with(compact('currencies'));
    }

    public function getSliders(View $view)
    {
        $sliders = Slider::active()->get();
        return $view->with(compact('sliders'));
    }

    public function getCategories(View $view)
    {
        $categories = Category::active()->onlyParent()->with('parent.children.children')->get();
        return $view->with(compact('categories'));
    }

    public function getRoles(View $view)
    {
        $roles = Role::where('id', '!=', 1)->get();
        return $view->with(compact('roles'));
    }

    public function getCountries(View $view)
    {
        $countries = Country::active()->get();
        return $view->with(compact('countries'));
    }

    public function getContactus(View $view)
    {
        $contact = Contactus::first();
        return $view->with(compact('contact'));
    }

    public function getSizes(View $view)
    {
        $sizes = Size::all();
        return $view->with(compact('sizes'));
    }

    public function getColors(View $view)
    {
        $colors = Color::all();
        return $view->with(compact('colors'));
    }

    public function getPages(View $view)
    {
        $pages = Page::active()->get();
        return $view->with(compact('pages'));
    }
}

