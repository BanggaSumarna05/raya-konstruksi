<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        // Register reCAPTCHA validator
        Validator::extend(
            'recaptcha',
            'App\\Validators\\ReCaptcha@validate'
        );

        // Share reCAPTCHA site key to all Inertia pages
        Inertia::share([
            'config' => [
                'google_recaptcha_key' => config('services.recaptcha.site_key'),
            ],
        ]);

        // Rate limiter for the inquiry form — max 5 submissions per minute per IP
        RateLimiter::for('inquiry', function (Request $request) {
            return Limit::perMinute(5)->by($request->ip());
        });
    }
}
