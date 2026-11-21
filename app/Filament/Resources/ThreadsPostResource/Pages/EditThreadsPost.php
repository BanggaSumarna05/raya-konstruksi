<?php

namespace App\Filament\Resources\ThreadsPostResource\Pages;

use App\Filament\Resources\ThreadsPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThreadsPost extends EditRecord
{
    protected static string $resource = ThreadsPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
