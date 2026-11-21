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
