<?php

namespace App\Providers;
use App\Models\ContactUs;
use App\Models\Service;
use App\Models\MenuItem;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */ 
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('contactUs', ContactUs::first());
        View::share('services', Service::latest()->get());
        View::share('menuItems', MenuItem::with('dropdownItems')->get());

 
    }
}
