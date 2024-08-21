<?php

namespace App\Providers;
use Illuminate\Support\Facades\App; // تأكد من استيراد App
use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Session; // تأكد من إضافة هذا السطر

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
        $locale = Session::get('locale', config('app.locale'));
        App::setLocale($locale);
    }
}
