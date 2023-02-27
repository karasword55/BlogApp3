<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Modules\BlogModule\Repository\IBlogRepository;
use Modules\BlogModule\Repository\BlogRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IBlogRepository::class,BlogRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
