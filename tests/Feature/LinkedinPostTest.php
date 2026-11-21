<?php

use App\Models\InstagramPost;
use App\Models\LinkedinPost;
use App\Models\ThreadsPost;
use Inertia\Testing\AssertableInertia as Assert;

it('only sends active embeds to the front pages', function () {
    InstagramPost::create(['url' => 'https://www.instagram.com/p/active/embed', 'order' => 1]);
    InstagramPost::create(['url' => 'https://www.instagram.com/p/hidden/embed', 'order' => 2, 'is_active' => false]);
    ThreadsPost::create(['url' => 'https://www.threads.net/@raya.konstruksi/post/active/embed', 'order' => 1]);
    ThreadsPost::create(['url' => 'https://www.threads.net/@raya.konstruksi/post/hidden/embed', 'order' => 2, 'is_active' => false]);
    LinkedinPost::query()->delete();
    LinkedinPost::create(['url' => 'https://www.linkedin.com/embed/feed/update/urn:li:share:active', 'order' => 1]);
    LinkedinPost::create(['url' => 'https://www.linkedin.com/embed/feed/update/urn:li:share:hidden', 'order' => 2, 'is_active' => false]);

    $this->get('/news-n-event')
        ->assertInertia(fn (Assert $page) => $page->has('instagramPosts', 1));

    $this->get('/careers')
        ->assertInertia(fn (Assert $page) => $page
            ->has('threadsPosts', 1)
            ->has('linkedinPosts', 1));
});
