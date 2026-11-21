<?php

use App\Models\InstagramPost;
use App\Models\LinkedinPost;
use App\Models\ThreadsPost;
use Inertia\Testing\AssertableInertia as Assert;

it('renders the career page with open positions, linkedin and threads posts', function () {
    LinkedinPost::query()->delete();
    LinkedinPost::create([
        'url' => 'https://www.linkedin.com/embed/feed/update/urn:li:share:7419212018609680384',
        'order' => 1,
    ]);
    ThreadsPost::create([
        'url' => 'https://www.threads.net/@raya.konstruksi/post/DPk2m94jH1x?xmt=abc',
        'order' => 1,
    ]);

    $this->get('/careers')
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('1career')
            ->has('careers')
            ->has('linkedinPosts', 1)
            ->where('linkedinPosts.0.url', 'https://www.linkedin.com/embed/feed/update/urn:li:share:7419212018609680384')
            ->has('threadsPosts', 1)
            ->where('threadsPosts.0.url', 'https://www.threads.net/@raya.konstruksi/post/DPk2m94jH1x')
            ->where('threadsPosts.0.embed', 'https://www.threads.net/@raya.konstruksi/post/DPk2m94jH1x/embed'));
});

it('renders the news page with instagram embeds built from share links', function () {
    InstagramPost::create([
        'url' => 'https://www.instagram.com/p/Dfn7BoGgRk7/?utm_source=ig_web_button_share_sheet',
        'order' => 1,
    ]);

    $this->get('/news-n-event')
        ->assertOk()
        ->assertInertia(fn (Assert $page) => $page
            ->component('1news')
            ->has('instagramPosts', 1)
            ->where('instagramPosts.0.url', 'https://www.instagram.com/p/Dfn7BoGgRk7/')
            ->where('instagramPosts.0.embed', 'https://www.instagram.com/p/Dfn7BoGgRk7/embed'));
});
