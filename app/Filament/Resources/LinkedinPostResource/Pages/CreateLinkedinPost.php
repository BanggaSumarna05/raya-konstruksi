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
