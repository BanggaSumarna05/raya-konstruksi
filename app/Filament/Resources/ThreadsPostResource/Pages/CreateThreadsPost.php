<?php

namespace App\Filament\Resources\ThreadsPostResource\Pages;

use App\Filament\Resources\ThreadsPostResource;
use Filament\Resources\Pages\CreateRecord;

class CreateThreadsPost extends CreateRecord
{
    protected static string $resource = ThreadsPostResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
