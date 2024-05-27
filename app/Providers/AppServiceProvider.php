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
        $navLinks = config("nav-links");
        $footerLinks = config("footerLogos");
        $footerMidLink = config("footerMidList");
        $footerBot = config("footerBotImg");
        view()->share(compact('navLinks','footerLinks','footerMidLink','footerBot'));
        //
    }
}
