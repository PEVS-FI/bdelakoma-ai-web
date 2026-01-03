<?php

namespace App\Providers;

use BezhanSalleh\LanguageSwitch\LanguageSwitch;
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

        LanguageSwitch::configureUsing(static function (LanguageSwitch $switch) {
            $switch
                ->locales(['sk', 'en'])
                ->flags([
                    'sk' => asset('images/flags/sk.png'),
                    'en' => asset('images/flags/en.png'),
                ])
                ->circular();
        });
    }
}
