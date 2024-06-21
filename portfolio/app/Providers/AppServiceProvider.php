<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if($this->app->environment('production')) {
<<<<<<< HEAD
            \URL::forceScheme('https');
        }
=======
        \URL::forceScheme('https');
    }
>>>>>>> 36dfc2749a5783b2509c232b8cff3dc35bca6708
    }
}
