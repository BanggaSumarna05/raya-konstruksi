<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
            'social' => [
                'instagram' => Setting::get('instagram_url', 'https://www.instagram.com/raya.konstruksi'),
                'threads' => Setting::get('threads_url', 'https://www.threads.net/@raya.konstruksi'),
                'linkedin' => Setting::get('linkedin_url', 'https://www.linkedin.com/company/rayakonstruksi/posts/?feedView=all'),
            ],
            // reCAPTCHA keys are shared via AppServiceProvider::boot()
        ];
    }
}
