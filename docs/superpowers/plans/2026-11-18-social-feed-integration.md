# Social Feed Integration Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Show the latest Instagram posts on the News page and the latest Threads and LinkedIn posts on the Career page, with LinkedIn managed from the admin panel.

**Architecture:** Instagram uses the installed `justbetter/laravel-instagram-feed` package (OAuth, token storage, refresh commands). Threads uses a small custom service with a 30 minute cache and a 7 day last-good copy. LinkedIn embeds are stored in `linkedin_posts` and rendered by the existing Swiper slider. The package cache is refreshed by the scheduler when cron exists, or lazily on page view when it does not.

**Tech Stack:** Laravel 12, Inertia 2, Vue 3, Filament 3, Pest 3, SQLite in-memory for tests.

**Spec:** `docs/superpowers/specs/2026-11-18-social-feed-integration-design.md`

## Global Constraints

- PHP 8.2, Laravel 12, Vue 3 with Inertia 2, Filament 3, Pest 3.
- No em dashes in any user-facing copy.
- No new JavaScript dependencies.
- Tokens live in `.env` or the `settings` table only, never in code.
- Tests run on SQLite in memory. Never point the test suite at the development MySQL database.
- `npm run build` and any deployment are gated on explicit user approval.
- Commit steps in this plan are reference only. Run them only when the user explicitly asks to commit.
- Instagram API version note: the package hardcodes Graph API `v21.0`. If Meta retires it, patch the constant in a fork.
- Threads handle is assumed to be `raya.konstruksi`, matching the Instagram account. Correct it if the real handle differs.

---

## File Structure

Create:

- `app/Services/Social/ThreadsFeed.php` (Threads API client, cache, token refresh)
- `app/Services/Social/InstagramFeedService.php` (package wrapper, normalized post array)
- `app/Console/Commands/RefreshThreadsFeed.php`
- `app/Console/Commands/RefreshThreadsToken.php`
- `app/Models/LinkedinPost.php`
- `database/migrations/2026_11_18_000001_create_linkedin_posts_table.php`
- `app/Filament/Resources/LinkedinPostResource.php`
- `app/Filament/Resources/LinkedinPostResource/Pages/ListLinkedinPosts.php`
- `app/Filament/Resources/LinkedinPostResource/Pages/CreateLinkedinPost.php`
- `app/Filament/Resources/LinkedinPostResource/Pages/EditLinkedinPost.php`
- `app/Filament/Pages/InstagramFeedSettings.php`
- `resources/views/filament/pages/instagram-feed-settings.blade.php`
- `config/instagram-feed.php` (published, then edited)
- `tests/Feature/ThreadsFeedTest.php`
- `tests/Feature/InstagramFeedTest.php`
- `tests/Feature/LinkedinPostTest.php`
- `docs/social-feeds-setup.md`

Modify:

- `phpunit.xml` (SQLite test database)
- `config/services.php` (Threads token)
- `.env.example` (social feed keys)
- `routes/console.php` (scheduler)
- `routes/web.php` (OAuth result redirects)
- `app/Http/Controllers/FrontController.php` (`news`, `career`)
- `resources/js/Pages/1news.vue` (Instagram section)
- `resources/js/Pages/1career.vue` (LinkedIn source, Threads section)

---

### Task 1: Isolate the test database

**Files:**
- Modify: `phpunit.xml:19-21`

**Interfaces:**
- Consumes: nothing.
- Produces: every later task runs `php artisan test` safely against SQLite in memory.

- [ ] **Step 1: Enable SQLite in memory for tests**

Replace the two commented lines in `phpunit.xml`:

```xml
        <!-- <env name="DB_CONNECTION" value="sqlite"/> -->
        <!-- <env name="DB_DATABASE" value=":memory:"/> -->
```

with:

```xml
        <env name="DB_CONNECTION" value="sqlite"/>
        <env name="DB_DATABASE" value=":memory:"/>
```

- [ ] **Step 2: Run the existing suite**

Run: `php artisan test`
Expected: existing tests pass. If `pdo_sqlite` is missing, stop and install it in PHP before continuing.

- [ ] **Step 3: Commit (only if the user asked)**

```bash
git add phpunit.xml
git commit -m "test: run test suite on sqlite in-memory"
```

---

### Task 2: Threads feed service, commands, and scheduler

**Files:**
- Create: `app/Services/Social/ThreadsFeed.php`
- Create: `app/Console/Commands/RefreshThreadsFeed.php`
- Create: `app/Console/Commands/RefreshThreadsToken.php`
- Modify: `config/services.php` (append before the final `];`)
- Modify: `.env.example` (append at the end)
- Modify: `routes/console.php`
- Test: `tests/Feature/ThreadsFeedTest.php`

**Interfaces:**
- Produces: `App\Services\Social\ThreadsFeed::posts(int $limit = 12): array` returning items with keys `id`, `text`, `image`, `permalink`, `timestamp`, `media_type`.
- Produces: `ThreadsFeed::refresh(int $limit = 12): void` and `ThreadsFeed::refreshToken(): void`.
- Produces: artisan commands `social:refresh-threads` and `social:refresh-threads-token`.

- [ ] **Step 1: Write the failing tests**

Create `tests/Feature/ThreadsFeedTest.php`:

```php
<?php

use App\Services\Social\ThreadsFeed;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    Cache::flush();
    Config::set('services.threads.access_token', 'test-thread-token');
});

it('maps the threads API response into feed cards', function () {
    Http::fake([
        'https://graph.threads.net/*' => Http::response([
            'data' => [
                [
                    'id' => '1791',
                    'media_type' => 'TEXT_POST',
                    'permalink' => 'https://www.threads.net/@raya.konstruksi/post/abc',
                    'text' => 'We are hiring site engineers.',
                    'timestamp' => '2026-11-17T10:00:00+0000',
                ],
                [
                    'id' => '1792',
                    'media_type' => 'IMAGE',
                    'media_url' => 'https://cdn.example.com/photo.jpg',
                    'permalink' => 'https://www.threads.net/@raya.konstruksi/post/def',
                    'text' => '',
                    'timestamp' => '2026-11-16T10:00:00+0000',
                ],
            ],
        ], 200),
    ]);

    $posts = app(ThreadsFeed::class)->posts(12);

    expect($posts)->toHaveCount(2)
        ->and($posts[0]['text'])->toBe('We are hiring site engineers.')
        ->and($posts[0]['image'])->toBe('')
        ->and($posts[1]['image'])->toBe('https://cdn.example.com/photo.jpg');
});

it('serves the last good cache when the threads API fails', function () {
    Cache::put('social.threads.last_good', [[
        'id' => 'old',
        'text' => 'Previous post',
        'image' => '',
        'permalink' => 'https://www.threads.net/@raya.konstruksi/post/old',
        'timestamp' => '2026-11-01T10:00:00+0000',
        'media_type' => 'TEXT_POST',
    ]], now()->addDay());

    Http::fake(['https://graph.threads.net/*' => Http::response(['error' => 'down'], 500)]);

    $posts = app(ThreadsFeed::class)->posts(12);

    expect($posts)->toHaveCount(1)->and($posts[0]['id'])->toBe('old');
});

it('returns an empty feed when no threads token is configured', function () {
    Config::set('services.threads.access_token', null);

    expect(app(ThreadsFeed::class)->posts(12))->toBe([]);
});
```

- [ ] **Step 2: Run the tests to verify they fail**

Run: `php artisan test tests/Feature/ThreadsFeedTest.php`
Expected: FAIL because `App\Services\Social\ThreadsFeed` does not exist.

- [ ] **Step 3: Add the Threads config and environment keys**

Append to `config/services.php` before the closing `];`:

```php
    'threads' => [
        'access_token' => env('THREADS_ACCESS_TOKEN'),
    ],
```

Append to `.env.example`:

```dotenv
# ─── Social feeds ──────────────────────────────────────────────────────────────
INSTAGRAM_CLIENT_ID=
INSTAGRAM_CLIENT_SECRET=
INSTAGRAM_FEED_USERNAME=raya.konstruksi
THREADS_ACCESS_TOKEN=
MAIL_SOCIAL_ERRORS_RECIPIENT=
```

- [ ] **Step 4: Implement the service**

Create `app/Services/Social/ThreadsFeed.php`:

```php
<?php

namespace App\Services\Social;

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ThreadsFeed
{
    private const API_URL = 'https://graph.threads.net/v1.0/me/threads';
    private const REFRESH_URL = 'https://graph.threads.net/refresh_access_token';
    private const CACHE_KEY = 'social.threads.posts';
    private const LAST_GOOD_KEY = 'social.threads.last_good';

    public function posts(int $limit = 12): array
    {
        if (! $this->token()) {
            return [];
        }

        $cached = Cache::get(self::CACHE_KEY);

        if ($cached !== null) {
            return $cached;
        }

        $this->refresh($limit);

        return Cache::get(self::CACHE_KEY) ?? Cache::get(self::LAST_GOOD_KEY, []);
    }

    public function refresh(int $limit = 12): void
    {
        $token = $this->token();

        if (! $token) {
            return;
        }

        $lock = Cache::lock('social.threads.refresh', 120);

        if (! $lock->get()) {
            return;
        }

        try {
            $response = Http::timeout(10)->get(self::API_URL, [
                'fields' => 'id,media_type,media_url,thumbnail_url,permalink,text,timestamp',
                'limit' => $limit,
                'access_token' => $token,
            ]);

            if ($response->failed()) {
                Log::warning('Threads feed request failed', ['status' => $response->status()]);

                return;
            }

            $posts = collect($response->json('data', []))
                ->map(fn (array $post) => $this->normalize($post))
                ->filter(fn (array $post) => $post['permalink'] !== '')
                ->take($limit)
                ->values()
                ->all();

            Cache::put(self::CACHE_KEY, $posts, now()->addMinutes(30));
            Cache::put(self::LAST_GOOD_KEY, $posts, now()->addDays(7));
        } catch (\Throwable $e) {
            Log::warning('Threads feed request error', ['message' => $e->getMessage()]);
        } finally {
            $lock->release();
        }
    }

    public function refreshToken(): void
    {
        $token = $this->token();

        if (! $token) {
            return;
        }

        $lock = Cache::lock('social.threads.token', 60);

        if (! $lock->get()) {
            return;
        }

        try {
            $response = Http::timeout(10)->get(self::REFRESH_URL, [
                'grant_type' => 'th_refresh_token',
                'access_token' => $token,
            ]);

            if ($response->failed()) {
                Log::warning('Threads token refresh failed', ['status' => $response->status()]);

                return;
            }

            $refreshed = $response->json('access_token');

            if ($refreshed) {
                Setting::put('threads.access_token', $refreshed);
            }
        } catch (\Throwable $e) {
            Log::warning('Threads token refresh error', ['message' => $e->getMessage()]);
        } finally {
            $lock->release();
        }
    }

    private function token(): ?string
    {
        return Setting::get('threads.access_token') ?: config('services.threads.access_token');
    }

    private function normalize(array $post): array
    {
        $type = $post['media_type'] ?? 'TEXT_POST';

        $image = $post['thumbnail_url']
            ?? ($type === 'IMAGE' ? ($post['media_url'] ?? '') : '');

        return [
            'id' => (string) ($post['id'] ?? ''),
            'text' => $post['text'] ?? '',
            'image' => $image,
            'permalink' => $post['permalink'] ?? '',
            'timestamp' => $post['timestamp'] ?? '',
            'media_type' => $type,
        ];
    }
}
```

- [ ] **Step 5: Add the artisan commands**

Create `app/Console/Commands/RefreshThreadsFeed.php`:

```php
<?php

namespace App\Console\Commands;

use App\Services\Social\ThreadsFeed;
use Illuminate\Console\Command;

class RefreshThreadsFeed extends Command
{
    protected $signature = 'social:refresh-threads';

    protected $description = 'Refresh the cached Threads feed';

    public function handle(ThreadsFeed $feed): int
    {
        $feed->refresh();

        $this->info('Threads feed refreshed.');

        return self::SUCCESS;
    }
}
```

Create `app/Console/Commands/RefreshThreadsToken.php`:

```php
<?php

namespace App\Console\Commands;

use App\Services\Social\ThreadsFeed;
use Illuminate\Console\Command;

class RefreshThreadsToken extends Command
{
    protected $signature = 'social:refresh-threads-token';

    protected $description = 'Extend the Threads long-lived access token';

    public function handle(ThreadsFeed $feed): int
    {
        $feed->refreshToken();

        $this->info('Threads token refresh attempted.');

        return self::SUCCESS;
    }
}
```

- [ ] **Step 6: Register the schedule**

Replace `routes/console.php` with:

```php
<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command('instagram-feed:refresh 12')->everyThirtyMinutes()->withoutOverlapping();
Schedule::command('instagram-feed:refresh-tokens')->daily();
Schedule::command('social:refresh-threads')->everyThirtyMinutes()->withoutOverlapping();
Schedule::command('social:refresh-threads-token')->daily();
```

- [ ] **Step 7: Run the tests**

Run: `php artisan test tests/Feature/ThreadsFeedTest.php`
Expected: 3 passed.

- [ ] **Step 8: Verify the command is safe without a token**

Run: `php artisan social:refresh-threads`
Expected: prints `Threads feed refreshed.` and makes no network call (no token configured).

- [ ] **Step 9: Commit (only if the user asked)**

```bash
git add app/Services/Social/ThreadsFeed.php app/Console/Commands/RefreshThreadsFeed.php app/Console/Commands/RefreshThreadsToken.php config/services.php .env.example routes/console.php tests/Feature/ThreadsFeedTest.php
git commit -m "feat: add threads feed service with cache and token refresh"
```

---

### Task 3: Wire the Instagram package

**Files:**
- Run: `php artisan vendor:publish --provider="JustBetter\InstagramFeed\InstagramFeedServiceProvider"`
- Modify: `config/instagram-feed.php`
- Modify: `routes/web.php` (append the two redirect routes at the end, before `require 'auth.php';` is fine anywhere outside the auth group)
- Create: `app/Services/Social/InstagramFeedService.php`
- Create: `app/Filament/Pages/InstagramFeedSettings.php`
- Create: `resources/views/filament/pages/instagram-feed-settings.blade.php`
- Modify: `app/Http/Controllers/FrontController.php`
- Test: `tests/Feature/InstagramFeedTest.php`

**Interfaces:**
- Consumes: package classes `JustBetter\InstagramFeed\Profile`, `JustBetter\InstagramFeed\InstagramMedia`.
- Produces: `App\Services\Social\InstagramFeedService::posts(int $limit = 12): array` returning items with keys `type`, `url`, `id`, `caption`, `permalink`, `thumbnail_url`, `timestamp`, `is_carousel`, `is_image`, `is_video`, `children`.
- Produces: Inertia prop `instagramPosts` on the News page.
- Produces: Filament page at `/rk130718/social/instagram`.

- [ ] **Step 1: Write the failing tests**

Create `tests/Feature/InstagramFeedTest.php`:

```php
<?php

use App\Services\Social\InstagramFeedService;
use Inertia\Testing\AssertableInertia as Assert;

it('returns an empty instagram feed when no profile is connected', function () {
    config()->set('instagram-feed.username', 'raya.konstruksi');

    expect(app(InstagramFeedService::class)->posts(12))->toBe([]);
});

it('passes instagram posts to the news page', function () {
    $this->get('/news-n-event')
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('1news')
            ->has('instagramPosts', 0));
});
```

- [ ] **Step 2: Run the tests to verify they fail**

Run: `php artisan test tests/Feature/InstagramFeedTest.php`
Expected: FAIL because the service class and the prop do not exist.

- [ ] **Step 3: Publish the package config and migrations**

Run: `php artisan vendor:publish --provider="JustBetter\InstagramFeed\InstagramFeedServiceProvider"`
Expected: creates `config/instagram-feed.php` and two migrations in `database/migrations` (`*_create_instagram_feed_token_table.php` and `*_create_instagram_basic_profile_table.php`).

- [ ] **Step 4: Point the config at environment values**

Replace `config/instagram-feed.php` with:

```php
<?php

return [
    'client_id' => env('INSTAGRAM_CLIENT_ID'),
    'client_secret' => env('INSTAGRAM_CLIENT_SECRET'),
    'username' => env('INSTAGRAM_FEED_USERNAME', 'raya.konstruksi'),
    'base_url' => env('INSTAGRAM_FEED_BASE_URL'),
    'auth_callback_route' => 'instagram/auth/callback',
    'success_redirect_to' => 'instagram-auth-success',
    'failure_redirect_to' => 'instagram-auth-failure',
    'ignore_video' => false,
    'notify_on_error' => env('MAIL_SOCIAL_ERRORS_RECIPIENT'),
];
```

- [ ] **Step 5: Run the migrations locally**

Run: `php artisan migrate`
Expected: creates `justbetter_instagram_basic_profiles` and `justbetter_instagram_feed_tokens`.

- [ ] **Step 6: Add OAuth result redirect routes**

Append to `routes/web.php`:

```php
# social feed OAuth results
Route::get('/instagram-auth-success', function () {
    return redirect('/rk130718/social/instagram')->with('status', 'Instagram connected.');
})->name('instagram-auth-success');

Route::get('/instagram-auth-failure', function () {
    return redirect('/rk130718/social/instagram')->with('error', 'Instagram connection failed.');
})->name('instagram-auth-failure');
```

- [ ] **Step 7: Implement the Instagram service**

Create `app/Services/Social/InstagramFeedService.php`:

```php
<?php

namespace App\Services\Social;

use Illuminate\Support\Facades\Cache;
use JustBetter\InstagramFeed\InstagramMedia;
use JustBetter\InstagramFeed\Profile;

class InstagramFeedService
{
    public function posts(int $limit = 12): array
    {
        $profile = Profile::for(config('instagram-feed.username', 'raya.konstruksi'));

        if (! $profile || ! $profile->hasInstagramAccess()) {
            return [];
        }

        $this->refreshIfStale($profile, $limit);

        return collect($profile->feed($limit))
            ->filter(fn ($media) => $media instanceof InstagramMedia)
            ->map(fn (InstagramMedia $media) => $media->toArray())
            ->take($limit)
            ->values()
            ->all();
    }

    private function refreshIfStale(Profile $profile, int $limit): void
    {
        $refreshedAt = Cache::get('social.instagram.refreshed_at');

        if ($refreshedAt && $refreshedAt->gt(now()->subMinutes(30))) {
            return;
        }

        $lock = Cache::lock('social.instagram.refresh', 120);

        if (! $lock->get()) {
            return;
        }

        try {
            $profile->refreshFeed($limit);
            Cache::put('social.instagram.refreshed_at', now(), now()->addDay());
        } catch (\Throwable $e) {
            report($e);
            Cache::put('social.instagram.refreshed_at', now(), now()->addMinutes(5));
        } finally {
            $lock->release();
        }
    }
}
```

- [ ] **Step 8: Add the Filament page and view**

Create `app/Filament/Pages/InstagramFeedSettings.php`:

```php
<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use JustBetter\InstagramFeed\Profile;

class InstagramFeedSettings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-camera';

    protected static ?string $navigationLabel = 'Instagram Feed';

    protected static ?string $navigationGroup = 'Content Management';

    protected static ?string $slug = 'social/instagram';

    protected static ?string $title = 'Instagram Feed';

    protected static string $view = 'filament.pages.instagram-feed-settings';

    protected function getViewData(): array
    {
        $profile = Profile::firstOrCreate([
            'username' => config('instagram-feed.username', 'raya.konstruksi'),
        ]);

        return [
            'profile' => $profile,
            'authUrl' => $profile->getInstagramAuthUrl(),
            'hasAccess' => $profile->hasInstagramAccess(),
            'mediaCount' => $profile->media_count,
        ];
    }
}
```

Create `resources/views/filament/pages/instagram-feed-settings.blade.php`:

```blade
<x-filament-panels::page>
    <x-filament::section>
        <div class="space-y-4 text-sm text-gray-700 dark:text-gray-200">
            @if (session('status'))
                <p class="font-semibold text-success-600">{{ session('status') }}</p>
            @endif

            @if (session('error'))
                <p class="font-semibold text-danger-600">{{ session('error') }}</p>
            @endif

            <p>Account: <strong>{{ $profile->username }}</strong></p>

            @if ($hasAccess)
                <p>Connected. {{ $mediaCount }} media items on the account.</p>
                <p>The feed refreshes every 30 minutes through the scheduler, or when the News page is opened.</p>
            @else
                <p>Not connected yet. Click the button below to authorize Instagram.</p>
            @endif

            <x-filament::button tag="a" :href="$authUrl" color="primary">
                Connect Instagram
            </x-filament::button>
        </div>
    </x-filament::section>
</x-filament-panels::page>
```

- [ ] **Step 9: Pass the feed to the News page**

In `app/Http/Controllers/FrontController.php`, add the import:

```php
use App\Services\Social\InstagramFeedService;
```

In `news()`, add before the `return` statement:

```php
        $instagramPosts = app(InstagramFeedService::class)->posts(12);
```

and extend the props:

```php
        return Inertia::render('1news', [
            'blogs' => $blogs,
            'instagramPosts' => $instagramPosts,
        ]);
```

- [ ] **Step 10: Run the tests**

Run: `php artisan test tests/Feature/InstagramFeedTest.php`
Expected: 2 passed.

- [ ] **Step 11: Verify the admin page renders**

Run: `php artisan serve --port=8000` in one terminal, log in at `http://localhost:8000/rk130718`, open Content Management > Instagram Feed.
Expected: page renders with the Connect Instagram button. Do not click Connect until real Meta credentials are in `.env`.

- [ ] **Step 12: Commit (only if the user asked)**

```bash
git add config/instagram-feed.php database/migrations routes/web.php app/Services/Social/InstagramFeedService.php app/Filament/Pages/InstagramFeedSettings.php resources/views/filament/pages/instagram-feed-settings.blade.php app/Http/Controllers/FrontController.php tests/Feature/InstagramFeedTest.php
git commit -m "feat: connect instagram feed through the justbetter package"
```

---

### Task 4: LinkedIn posts managed from Filament

**Files:**
- Create: `database/migrations/2026_11_18_000001_create_linkedin_posts_table.php`
- Create: `app/Models/LinkedinPost.php`
- Create: `app/Filament/Resources/LinkedinPostResource.php`
- Create: `app/Filament/Resources/LinkedinPostResource/Pages/ListLinkedinPosts.php`
- Create: `app/Filament/Resources/LinkedinPostResource/Pages/CreateLinkedinPost.php`
- Create: `app/Filament/Resources/LinkedinPostResource/Pages/EditLinkedinPost.php`
- Modify: `app/Http/Controllers/FrontController.php`
- Test: `tests/Feature/LinkedinPostTest.php`

**Interfaces:**
- Produces: table `linkedin_posts` with columns `id`, `url`, `order`, `is_active`, `created_at`, `updated_at`.
- Produces: Inertia prop `linkedinPosts` (array of URL strings) on the Career page, cached under `career_linkedin_posts`.
- Produces: Filament resource "LinkedIn Posts" under Content Management.

- [ ] **Step 1: Write the failing test**

Create `tests/Feature/LinkedinPostTest.php`:

```php
<?php

use App\Models\LinkedinPost;
use Illuminate\Support\Facades\Cache;
use Inertia\Testing\AssertableInertia as Assert;

beforeEach(fn () => Cache::flush());

it('passes active linkedin posts to the career page in order', function () {
    LinkedinPost::create([
        'url' => 'https://www.linkedin.com/embed/feed/update/urn:li:share:2',
        'order' => 2,
        'is_active' => true,
    ]);

    LinkedinPost::create([
        'url' => 'https://www.linkedin.com/embed/feed/update/urn:li:share:1',
        'order' => 1,
        'is_active' => true,
    ]);

    LinkedinPost::create([
        'url' => 'https://www.linkedin.com/embed/feed/update/urn:li:share:3',
        'order' => 3,
        'is_active' => false,
    ]);

    $this->get('/careers')
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('1career')
            ->has('linkedinPosts', 2)
            ->where('linkedinPosts.0', 'https://www.linkedin.com/embed/feed/update/urn:li:share:1')
            ->where('linkedinPosts.1', 'https://www.linkedin.com/embed/feed/update/urn:li:share:2'));
});
```

- [ ] **Step 2: Run the test to verify it fails**

Run: `php artisan test tests/Feature/LinkedinPostTest.php`
Expected: FAIL because the model and table do not exist.

- [ ] **Step 3: Create the migration**

Create `database/migrations/2026_11_18_000001_create_linkedin_posts_table.php`:

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('linkedin_posts', function (Blueprint $table) {
            $table->id();
            $table->string('url', 500);
            $table->unsignedInteger('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('linkedin_posts');
    }
};
```

- [ ] **Step 4: Create the model**

Create `app/Models/LinkedinPost.php`:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class LinkedinPost extends Model
{
    protected $fillable = [
        'url',
        'order',
        'is_active',
    ];

    protected $casts = [
        'order' => 'integer',
        'is_active' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget('career_linkedin_posts'));
        static::deleted(fn () => Cache::forget('career_linkedin_posts'));
    }
}
```

- [ ] **Step 5: Create the Filament resource**

Create `app/Filament/Resources/LinkedinPostResource.php`:

```php
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkedinPostResource\Pages;
use App\Models\LinkedinPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LinkedinPostResource extends Resource
{
    protected static ?string $model = LinkedinPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static ?string $navigationLabel = 'LinkedIn Posts';

    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('LinkedIn Post')
                    ->schema([
                        Forms\Components\TextInput::make('url')
                            ->required()
                            ->url()
                            ->maxLength(500)
                            ->label('Embed URL')
                            ->placeholder('https://www.linkedin.com/embed/feed/update/urn:li:share:...')
                            ->helperText('Open the post on LinkedIn, choose Embed this post, and paste the iframe src value.')
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('order')
                            ->numeric()
                            ->default(0)
                            ->label('Urutan Tampil'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Aktif / Tampilkan')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order')
            ->reorderable('order')
            ->columns([
                Tables\Columns\TextColumn::make('url')
                    ->limit(70)
                    ->searchable()
                    ->label('Embed URL'),
                Tables\Columns\TextColumn::make('order')
                    ->sortable()
                    ->label('Urutan'),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean()
                    ->label('Aktif'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLinkedinPosts::route('/'),
            'create' => Pages\CreateLinkedinPost::route('/create'),
            'edit' => Pages\EditLinkedinPost::route('/{record}/edit'),
        ];
    }
}
```

Create `app/Filament/Resources/LinkedinPostResource/Pages/ListLinkedinPosts.php`:

```php
<?php

namespace App\Filament\Resources\LinkedinPostResource\Pages;

use App\Filament\Resources\LinkedinPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLinkedinPosts extends ListRecords
{
    protected static string $resource = LinkedinPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
```

Create `app/Filament/Resources/LinkedinPostResource/Pages/CreateLinkedinPost.php`:

```php
<?php

namespace App\Filament\Resources\LinkedinPostResource\Pages;

use App\Filament\Resources\LinkedinPostResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLinkedinPost extends CreateRecord
{
    protected static string $resource = LinkedinPostResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
```

Create `app/Filament/Resources/LinkedinPostResource/Pages/EditLinkedinPost.php`:

```php
<?php

namespace App\Filament\Resources\LinkedinPostResource\Pages;

use App\Filament\Resources\LinkedinPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLinkedinPost extends EditRecord
{
    protected static string $resource = LinkedinPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
```

- [ ] **Step 6: Pass LinkedIn posts and Threads posts to the Career page**

In `app/Http/Controllers/FrontController.php`, add imports:

```php
use App\Models\LinkedinPost;
use App\Services\Social\ThreadsFeed;
```

Replace the body of `career()` with:

```php
    public function career()
    {
        $careers = Career::where('is_active', true)
            ->orderBy('order')
            ->get();

        $linkedinPosts = Cache::remember('career_linkedin_posts', now()->addHours(1), fn () =>
            LinkedinPost::where('is_active', true)->orderBy('order')->pluck('url')->all()
        );

        $threadsPosts = app(ThreadsFeed::class)->posts(12);

        SEOMeta::addKeyword($this->keywords);

        return Inertia::render('1career', [
            'careers' => $careers,
            'linkedinPosts' => $linkedinPosts,
            'threadsPosts' => $threadsPosts,
        ]);
    }
```

- [ ] **Step 7: Run the migration and the test**

Run: `php artisan migrate` then `php artisan test tests/Feature/LinkedinPostTest.php`
Expected: 1 passed.

- [ ] **Step 8: Verify the admin CRUD**

Log in at `/rk130718`, open Content Management > LinkedIn Posts, create a record with one of the existing embed URLs.
Expected: the record appears and can be reordered, edited, and deleted.

- [ ] **Step 9: Commit (only if the user asked)**

```bash
git add database/migrations/2026_11_18_000001_create_linkedin_posts_table.php app/Models/LinkedinPost.php app/Filament/Resources/LinkedinPostResource.php app/Filament/Resources/LinkedinPostResource app/Http/Controllers/FrontController.php tests/Feature/LinkedinPostTest.php
git commit -m "feat: manage linkedin embed posts from the admin panel"
```

---

### Task 5: Instagram section on the News page

**Files:**
- Modify: `resources/js/Pages/1news.vue`

**Interfaces:**
- Consumes: `instagramPosts` prop from Task 3. Item keys: `id`, `url`, `thumbnail_url`, `permalink`, `caption`, `timestamp`, `is_video`, `is_carousel`.

- [ ] **Step 1: Replace the SociableKit loader**

In the `<script setup>` block, replace the import line:

```js
import { ref, onMounted } from 'vue';
```

with:

```js
import { ref } from 'vue';
```

Add the prop:

```js
const props = defineProps({
    blogs: Object,
    instagramPosts: {
        type: Array,
        default: () => [],
    },
});
```

Remove the whole `onMounted` block that injects the SociableKit script (it starts with the comment `// Load SociableKit widget script once after component mounts`).

Add these helpers after `onCardImageError`:

```js
function igImage(post) {
    return post.thumbnail_url || post.url || '';
}

function igCaption(post) {
    const text = post.caption || '';
    return text.length > 90 ? text.slice(0, 90) + '…' : text;
}

function igDate(post) {
    if (!post.timestamp) return '';
    return new Date(post.timestamp).toLocaleDateString('id-ID', {
        year: 'numeric', month: 'short', day: 'numeric',
    });
}
```

- [ ] **Step 2: Replace the widget markup**

Replace the whole `<!-- SociableKit Instagram widget -->` block (the `div.ig-widget-wrap` and its children) with:

```html
            <div v-if="instagramPosts.length" class="ig-grid" data-rv data-rv-delay="100">
                <a v-for="post in instagramPosts"
                   :key="post.id"
                   :href="post.permalink"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="ig-card">
                    <div class="ig-card-media">
                        <img :src="igImage(post)" alt="" loading="lazy" class="ig-card-img" />
                        <span v-if="post.is_video" class="ig-card-badge"><i class="bi bi-play-fill"></i></span>
                        <span v-else-if="post.is_carousel" class="ig-card-badge"><i class="bi bi-images"></i></span>
                    </div>
                    <div class="ig-card-body">
                        <p v-if="post.caption" class="ig-card-caption">{{ igCaption(post) }}</p>
                        <p class="ig-card-date">{{ igDate(post) }}</p>
                    </div>
                </a>
            </div>
            <p v-else class="ig-empty">Follow our latest updates on Instagram.</p>
```

Update the follow button href and label in the same section:

```html
                    href="https://www.instagram.com/raya.konstruksi"
```

```html
                    Follow @raya.konstruksi
```

- [ ] **Step 3: Replace the widget CSS**

Delete the CSS rules `.ig-widget-wrap`, `.ig-widget-fallback`, `.ig-widget-fallback i`, `.ig-widget-wrap:has(iframe) .ig-widget-fallback`, and `.ig-widget-wrap iframe`. In the `@media (max-width: 768px)` block, remove the `.ig-widget-wrap` line.

Add in their place:

```css
.ig-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 18px;
}
.ig-card {
    display: flex;
    flex-direction: column;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 14px;
    overflow: hidden;
    text-decoration: none;
    transition: transform 0.25s, box-shadow 0.25s;
}
.ig-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.ig-card-media { position: relative; aspect-ratio: 1 / 1; background: var(--off); overflow: hidden; }
.ig-card-img { width: 100%; height: 100%; object-fit: cover; display: block; }
.ig-card-badge {
    position: absolute; top: 10px; right: 10px;
    width: 28px; height: 28px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    background: rgba(13,20,40,0.72); color: #fff; font-size: 14px;
}
.ig-card-body { padding: 14px 16px 16px; display: flex; flex-direction: column; gap: 6px; }
.ig-card-caption { font-size: 13px; color: var(--eerie); line-height: 1.5; margin: 0; }
.ig-card-date { font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: var(--muted); margin: 0; }
.ig-empty { text-align: center; color: var(--muted); font-size: 14px; }
```

In the responsive block, add:

```css
@media (max-width: 991px) { .ig-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 575px) { .ig-grid { grid-template-columns: 1fr; } }
```

- [ ] **Step 4: Verify in the browser**

Run `npm run dev` and `php artisan serve --port=8000`, then open `http://localhost:8000/news-n-event` with sample data from Task 7, Step 3.
Expected: four columns on desktop, two on tablet, one on mobile. No SociableKit script is loaded. The section hides when `instagramPosts` is empty.

- [ ] **Step 5: Commit (only if the user asked)**

```bash
git add resources/js/Pages/1news.vue
git commit -m "feat: render instagram posts natively on the news page"
```

---

### Task 6: Career page LinkedIn source and Threads section

**Files:**
- Modify: `resources/js/Pages/1career.vue`

**Interfaces:**
- Consumes: `linkedinPosts` (array of strings) and `threadsPosts` (array of objects with `id`, `text`, `image`, `permalink`, `timestamp`) from Task 4.

- [ ] **Step 1: Add the props**

In the `<script setup>` block, extend `defineProps`:

```js
const props = defineProps({
    careers: {
        type: Array,
        default: () => [],
    },
    linkedinPosts: {
        type: Array,
        default: () => [],
    },
    threadsPosts: {
        type: Array,
        default: () => [],
    },
});
```

- [ ] **Step 2: Remove the hardcoded LinkedIn URLs**

In the Options API `<script>` block, delete the entire `data()` method with the 12 hardcoded `linkedinPosts` URLs. The `mounted()` method already has a Swiper guard; add an early return at its top and keep the slider init unchanged:

```js
    mounted() {
        if (!this.linkedinPosts?.length) {
            return;
        }
        if (typeof window.Swiper === 'undefined') {
            console.warn('[1career.vue] Swiper not available, LinkedIn slider disabled.');
            return;
        }
        new Swiper(".linkedin-slider", {
            loop: true, speed: 600,
            slidesPerView: 1, spaceBetween: 20,
            autoplay: { delay: 5000, disableOnInteraction: false },
            pagination: { el: ".swiper-pagination", clickable: true },
            breakpoints: {
                768:  { slidesPerView: 2, spaceBetween: 24 },
                1024: { slidesPerView: 3, spaceBetween: 32 },
            },
        });
    },
    methods: {
        formatPostDate(value) {
            if (!value) {
                return '';
            }
            return new Date(value).toLocaleDateString('id-ID', {
                year: 'numeric', month: 'long', day: 'numeric',
            });
        },
    },
```

- [ ] **Step 3: Guard and label the LinkedIn section**

Add `v-if="linkedinPosts.length"` to the LinkedIn `<section class="career-section">`. Replace the intro paragraph text with:

```html
                <p class="section-body" style="max-width: 480px; margin: 0 auto;">
                    Stay updated with our latest career opportunities and company news on LinkedIn.
                </p>
```

Keep the existing iframe loop.

- [ ] **Step 4: Add the Threads section**

Insert this section directly after the LinkedIn section closing `</section>` and before the `<!-- ── Recruitment Fraud ── -->` comment:

```html
    <!-- ── Threads Updates ── -->
    <section v-if="threadsPosts.length" class="career-section career-section--light">
        <div class="container">
            <div class="text-center mb-12" data-rv>
                <span class="section-eyebrow">Threads</span>
                <h2 class="section-title mt-2">Hiring Updates</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-body" style="max-width: 520px; margin: 0 auto;">
                    Open positions and recruitment announcements straight from our Threads account.
                </p>
            </div>

            <div class="threads-grid" data-rv>
                <a v-for="post in threadsPosts"
                   :key="post.id"
                   :href="post.permalink"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="threads-card">
                    <img v-if="post.image" :src="post.image" alt="" loading="lazy" class="threads-card-img" />
                    <div class="threads-card-body">
                        <p v-if="post.text" class="threads-card-text">{{ post.text }}</p>
                        <p class="threads-card-date">{{ formatPostDate(post.timestamp) }}</p>
                    </div>
                </a>
            </div>

            <div class="text-center mt-4">
                <a href="https://www.threads.net/@raya.konstruksi"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="btn-threads">
                    <i class="bi bi-threads"></i> Follow Us on Threads
                </a>
            </div>
        </div>
    </section>
```

- [ ] **Step 5: Add the Threads CSS**

Append to the `<style scoped>` block:

```css
/* ── Threads cards ── */
.threads-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}
.threads-card {
    display: flex;
    flex-direction: column;
    background: #fff;
    border: 1px solid var(--border);
    border-radius: 12px;
    overflow: hidden;
    text-decoration: none;
    transition: transform 0.25s, box-shadow 0.25s;
}
.threads-card:hover { transform: translateY(-3px); box-shadow: var(--shadow-md); }
.threads-card-img { width: 100%; max-height: 260px; object-fit: cover; display: block; }
.threads-card-body { padding: 16px 18px 18px; display: flex; flex-direction: column; gap: 8px; }
.threads-card-text { font-size: 13px; color: var(--eerie); line-height: 1.55; margin: 0; }
.threads-card-date { font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; color: var(--muted); margin: 0; }
@media (max-width: 991px) { .threads-grid { grid-template-columns: repeat(2, 1fr); } }
@media (max-width: 575px) { .threads-grid { grid-template-columns: 1fr; } }

.btn-threads {
    display: inline-flex; align-items: center; gap: 8px;
    background: #000; color: #fff;
    font-family: var(--font-body); font-size: 13px; font-weight: 700;
    padding: 13px 28px; border-radius: 50px; text-decoration: none;
    border: 2px solid #000;
    transition: background 0.22s, transform 0.2s;
}
.btn-threads:hover { background: #1a1a1a; color: #fff; transform: translateY(-2px); }
```

- [ ] **Step 6: Verify in the browser**

Open `http://localhost:8000/careers` with sample data from Task 7, Step 3.
Expected: LinkedIn slider renders from database URLs, Threads cards render below it, and both sections are hidden when their props are empty.

- [ ] **Step 7: Commit (only if the user asked)**

```bash
git add resources/js/Pages/1career.vue
git commit -m "feat: render threads feed and admin managed linkedin posts on careers"
```

---

### Task 7: Setup guide and end to end verification

**Files:**
- Create: `docs/social-feeds-setup.md`

**Interfaces:**
- Consumes: everything from Tasks 1 to 6.
- Produces: the operator guide for Meta credentials, admin steps, and cron.

- [ ] **Step 1: Write the setup guide**

Create `docs/social-feeds-setup.md`:

```markdown
# Social Feeds Setup

## Instagram

1. Use the Instagram account `raya.konstruksi`. It must be a Professional account (Business or Creator).
2. Open https://developers.facebook.com, create an app, and add the Instagram product (Instagram API with Instagram Login).
3. Add the OAuth redirect URI:
   - Production: https://rayakonstruksi.com/instagram/auth/callback
   - Local: http://localhost:8000/instagram/auth/callback
4. Copy the Instagram App ID and App Secret into the server `.env`:
   INSTAGRAM_CLIENT_ID=...
   INSTAGRAM_CLIENT_SECRET=...
   INSTAGRAM_FEED_USERNAME=raya.konstruksi
   MAIL_SOCIAL_ERRORS_RECIPIENT=marketing@rayakonstruksi.com
5. Log in to /rk130718, open Content Management > Instagram Feed, and click Connect Instagram.
6. The feed refreshes every 30 minutes through the scheduler, or when the News page is opened.

## Threads

1. In the same Meta app, add the Threads API product.
2. Generate a long lived token for the Threads account and set:
   THREADS_ACCESS_TOKEN=...
3. Refresh it with `php artisan social:refresh-threads-token`. The refreshed token is stored in the settings table and used automatically.

## LinkedIn

1. Open a public post on the company page, choose Embed this post, and copy the iframe src.
2. Log in to /rk130718, open Content Management > LinkedIn Posts, and paste the URL.
3. Reorder records with the order column. Inactive records are hidden.

## Scheduler

If the hosting plan allows a cron job, add this line in cPanel:

* * * * * cd /home/rayakonstruksi/public_html/raya-konstruksi && /usr/local/bin/php artisan schedule:run >> /dev/null 2>&1

Without cron, feeds still refresh lazily when the News or Careers page is opened.

## Troubleshooting

- Instagram returns an unsupported version error: the package hardcodes Graph API v21.0. Patch the constant in a fork and update composer.
- Threads fails with code 190: the token is invalid or revoked. Generate a new token and update THREADS_ACCESS_TOKEN.
- LinkedIn iframe shows a login wall: the post is not public.
```

- [ ] **Step 2: Seed sample data, verify the UI, then clean up**

Seed LinkedIn:

```bash
php artisan tinker --execute='App\Models\LinkedinPost::create(["url" => "https://www.linkedin.com/embed/feed/update/urn:li:share:7419212018609680384", "order" => 1, "is_active" => true]);'
```

Seed Threads:

```bash
php artisan tinker --execute='Illuminate\Support\Facades\Cache::put("social.threads.posts", [["id" => "1", "text" => "We are hiring site engineers and HSE officers.", "image" => "", "permalink" => "https://www.threads.net/@raya.konstruksi/post/demo", "timestamp" => now()->toIso8601String(), "media_type" => "TEXT_POST"]], now()->addHour());'
```

Seed Instagram:

```bash
php artisan tinker --execute='$p = JustBetter\InstagramFeed\Profile::firstOrCreate(["username" => "raya.konstruksi"]); $p->tokens()->create(["access_code" => "demo", "username" => "raya.konstruksi", "user_id" => "1", "user_fullname" => "Raya", "user_profile_picture" => ""]); Illuminate\Support\Facades\Cache::forget($p->cacheKey()); Illuminate\Support\Facades\Cache::forever($p->cacheKey(), [new JustBetter\InstagramFeed\InstagramMedia("image", ["id" => "1", "url" => "https://picsum.photos/seed/raya1/800", "permalink" => "https://www.instagram.com/p/demo", "caption" => "Demo project update", "timestamp" => now()->toIso8601String()])]); Illuminate\Support\Facades\Cache::put("social.instagram.refreshed_at", now(), now()->addDay());'
```

Open `/news-n-event` and `/careers` on desktop and mobile widths.
Expected: Instagram cards render on News, Threads cards render on Careers, LinkedIn slider renders. No console errors.

Clean up:

```bash
php artisan tinker --execute='$p = JustBetter\InstagramFeed\Profile::where("username", "raya.konstruksi")->first(); if ($p) { Illuminate\Support\Facades\Cache::forget($p->cacheKey()); $p->tokens()->delete(); $p->delete(); } Illuminate\Support\Facades\Cache::forget("social.instagram.refreshed_at");'
```

- [ ] **Step 3: Run the full test suite**

Run: `php artisan test`
Expected: all tests pass.

- [ ] **Step 4: Report build status**

Do not run `npm run build` or deploy. Tell the user the UI was verified with the Vite dev server and that the production asset build is waiting for their approval.

- [ ] **Step 5: Commit (only if the user asked)**

```bash
git add docs/social-feeds-setup.md
git commit -m "docs: add social feeds setup guide"
```
