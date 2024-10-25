<?php

namespace App\Providers;
use App\Models\AboutUs;
use App\Models\ContactUs;
use App\Models\Service;
use App\Models\Industries; 
use App\Models\MenuItem;
use App\Models\CoreValue;
use App\Models\VisionMission;
use App\Models\Sociallink;
use App\Models\SocialImpact;
use App\Models\Faqs;
use App\Models\Career;
use App\Models\ContactForm;
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
        // View::share('projectMenus', projectMenus::latest()->get());
        View::share('aboutUs', AboutUs::first());
        View::share('contactUs', ContactUs::first());
        View::share('industries', Industries::latest()->get());
        View::share('solutions', Service::latest()->get());
        View::share('menuItems', MenuItem::with('dropdownItems')->get());
        View::share('visionMission', VisionMission::first()); 
        View::share('socialImpact', SocialImpact::first()); 
        View::share('career', Career::first()); 
        View::share('coreValue', CoreValue::first()); 
        View::share('sociallink', Sociallink::first());
        View::share('faqs', Faqs::latest()->get());
        View::share('contacts', ContactForm::latest()->paginate(20));
     

 
    }
}
