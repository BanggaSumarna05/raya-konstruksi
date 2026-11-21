<?php

use App\Filament\Pages\ManageSocialLinks;
use App\Models\Setting;
use App\Models\User;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(User::factory()->create(['email' => 'admin@rayakonstruksi.com']));
});

it('renders the linkedin posts admin page', function () {
    $this->get('/rk130718/linkedin-posts')->assertOk();
});

it('renders the instagram and threads posts admin pages', function () {
    $this->get('/rk130718/instagram-posts')->assertOk();
    $this->get('/rk130718/threads-posts')->assertOk();
});

it('renders the site settings page', function () {
    $this->get('/rk130718/manage-settings')
        ->assertOk()
        ->assertSee('Email Penerima Form Inquiry');
});

it('shows the social media page in the admin navigation', function () {
    $this->get('/rk130718')
        ->assertOk()
        ->assertSee('Social Media')
        ->assertSee('Instagram Posts')
        ->assertSee('Threads Posts');
});

it('renders the social media page with link fields', function () {
    $this->get('/rk130718/manage-social-links')
        ->assertOk()
        ->assertSee('URL Instagram')
        ->assertSee('URL Threads')
        ->assertSee('URL LinkedIn');
});

it('saves social links from the social media page', function () {
    Livewire::test(ManageSocialLinks::class)
        ->fillForm([
            'instagram_url' => 'https://www.instagram.com/raya.news',
            'threads_url' => 'https://www.threads.net/@raya.news',
            'linkedin_url' => 'https://www.linkedin.com/company/raya-news',
        ])
        ->call('save')
        ->assertHasNoFormErrors();

    expect(Setting::get('instagram_url'))->toBe('https://www.instagram.com/raya.news')
        ->and(Setting::get('threads_url'))->toBe('https://www.threads.net/@raya.news')
        ->and(Setting::get('linkedin_url'))->toBe('https://www.linkedin.com/company/raya-news');
});
