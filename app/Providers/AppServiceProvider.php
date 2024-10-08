<?php

namespace App\Providers;

use App\Models\MasterDepartemen;
use Illuminate\Support\Facades\View;
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
    public function boot()
{
    View::composer('components.sidebar', function ($view) {
        $departemen = MasterDepartemen::all();
        $view->with('departemen', $departemen);
    });
}
}
