<?php

namespace App\Filament\Resources\LinkedinPostResource\Pages;

use App\Filament\Resources\LinkedinPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLinkedinPost extends EditRecord
{
    protected static string $resource = LinkedinPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
