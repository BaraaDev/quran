<?php

namespace App\Providers;

use App\Models\AboutUs;
use App\Models\ContactUs;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

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
        /*view()->share('aboutUs',AboutUs::orderBy('id','desc')->latest()->limit(100)->get());
        view()->share('aboutUsFind',AboutUs::first());

        view()->share('settings',Setting::orderBy('id','desc')->latest()->limit(100)->get());
        view()->share('settingsFind',Setting::first());

        view()->share('contactUs',ContactUs::orderBy('created_at','desc')->latest()->where('is_sender',0)->limit(6)->get());
        view()->share('contactUsCount',ContactUs::where('is_read',0)->where('is_sender',0)->orderBy('id','desc')->count());*/
    }
}
