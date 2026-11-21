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
