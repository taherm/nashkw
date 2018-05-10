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
//        view()->composer([
//                'backend.partials.sidebar',
//            'backend.modules.user.create',
//            'backend.modules.category.create',
//            'backend.modules.category.edit',
//        ],
//            'App\Services\ViewComposers@getRoles');

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
