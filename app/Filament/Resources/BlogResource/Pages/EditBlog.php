<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Cache;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    // Store old slug before save to clear its cache
    private string $oldSlug = '';

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(function () {
                    Cache::forget("blog_{$this->record->slug}");
                    Cache::forget('home_blogs');
                    for ($i = 1; $i <= 20; $i++) {
                        Cache::forget("news_listing_{$i}");
                    }
                }),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function beforeSave(): void
    {
        // Capture old slug before it potentially changes
        $this->oldSlug = $this->record->slug ?? '';
    }

    protected function afterSave(): void
    {
        // Clear old slug cache (in case title/slug changed)
        if ($this->oldSlug) {
            Cache::forget("blog_{$this->oldSlug}");
        }
        // Clear current slug cache
        Cache::forget("blog_{$this->record->slug}");
        // Clear home and all paginated news listing caches
        Cache::forget('home_blogs');
        for ($i = 1; $i <= 20; $i++) {
            Cache::forget("news_listing_{$i}");
        }
    }
}
