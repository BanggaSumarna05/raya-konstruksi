<?php

namespace App\Filament\Resources\ThreadsPostResource\Pages;

use App\Filament\Resources\ThreadsPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThreadsPosts extends ListRecords
{
    protected static string $resource = ThreadsPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
