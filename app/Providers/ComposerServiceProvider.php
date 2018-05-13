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
        view()->composer('*','App\Services\ViewComposers@getCart');
        view()->composer('*','App\Services\ViewComposers@getCartCount');
        view()->composer('*', 'App\Services\ViewComposers@getCurrency');
        view()->composer('*', 'App\Services\ViewComposers@getCurrencies');
        view()->composer('*', 'App\Services\ViewComposers@getCategories');
        view()->composer('*', 'App\Services\ViewComposers@getContactus');
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
