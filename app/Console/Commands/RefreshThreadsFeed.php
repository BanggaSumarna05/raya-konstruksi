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
