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
