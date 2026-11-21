<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Client;
use App\Models\Project;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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

        /*
         * Invalidasi cache di level model — menjamin situs selalu menampilkan
         * data terbaru setelah create/edit/delete/bulk-delete dari panel admin.
         */

        // Blog: homepage + listing news + halaman detail per-slug
        $clearBlogCaches = function (Blog $blog) {
            Cache::forget('home_blogs');
            Cache::forget("blog_{$blog->slug}");
            foreach (range(1, 30) as $page) {
                Cache::forget("news_listing_{$page}");
            }
        };
        Blog::saved($clearBlogCaches);
        Blog::deleted($clearBlogCaches);
        Blog::restored($clearBlogCaches);

        // Project: homepage + halaman portfolio
        $clearProjectCaches = function () {
            Cache::forget('home_projects');
            Cache::forget('portfolio_projects');
            Cache::forget('who_we_are_projects');
        };
        Project::saved($clearProjectCaches);
        Project::deleted($clearProjectCaches);

        // Client: carousel hero + daftar client
        $clearClientCaches = function () {
            Cache::forget('clients_hero');
            Cache::forget('clients_active');
            Cache::forget('active_clients'); // cache key lama
        };
        Client::saved($clearClientCaches);
        Client::deleted($clearClientCaches);
        Client::restored($clearClientCaches);
    }
}
