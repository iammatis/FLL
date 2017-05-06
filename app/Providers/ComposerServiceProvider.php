<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use Spatie\Menu;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('web.includes.navigation', function()
        {
            Menu::new([
                Link::to('/', 'Home'),
                Link::to('/about', 'About'),
            ]);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
