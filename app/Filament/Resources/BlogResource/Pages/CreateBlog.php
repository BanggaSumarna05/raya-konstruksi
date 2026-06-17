<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use App\Models\Blog;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['title'])) {
            $data['slug'] = Str::slug($data['title']) . '-' . Str::random(5);
        }
        $data['user_id'] = Auth::user()->id;
        return $data;
    }

    protected function afterCreate(): void
    {
        Cache::forget('home_blogs');
        // Clear all paginated news listing caches (pages 1–20)
        for ($i = 1; $i <= 20; $i++) {
            Cache::forget("news_listing_{$i}");
        }
    }
}
