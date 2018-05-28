<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // frontend
        view()->composer([
                'frontend.partials.slider',
        ],
            'App\Services\ViewComposers@getSliders');
        view()->composer([
            'frontend.partials._nav_right'
        ],'App\Services\ViewComposers@getCart');
        view()->composer([
            'frontend.partials._nav_right'
        ],'App\Services\ViewComposers@getCartCount');
        view()->composer([
            'frontend.modules.cart.index'
        ],'App\Services\ViewComposers@getCountries');
        view()->composer([
            'frontend.home',
            'frontend.partials.footer',
            'frontend.modules.product.index',
            'frontend.modules.product.show',
            'frontend.partials._currency_language'
        ], 'App\Services\ViewComposers@getCurrency');
        view()->composer([
            'frontend.partials._currency_language'
        ], 'App\Services\ViewComposers@getCurrencies');
        view()->composer([
            'frontend.partials.header'
        ], 'App\Services\ViewComposers@getCategories');
        view()->composer([
            'frontend.partials.footer',
            'frontend.partials.header',
            'frontend.modules.cart.index',
            'frontend.modules.checkout.index'
        ], 'App\Services\ViewComposers@getSettings');
        view()->composer([
            'frontend.partials.footer',
            'frontend.partials.header'
        ], 'App\Services\ViewComposers@getPages');
    }

    /**
     * automatically composer() method will be registered
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
