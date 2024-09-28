<?php

namespace App\Providers;

use App\Models\Association;
use App\Models\Edition;
use App\Models\Guest;
use App\Models\Link;
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
        Edition::unguard();
        Association::unguard();
        Guest::unguard();
        Link::unguard();
    }
}
