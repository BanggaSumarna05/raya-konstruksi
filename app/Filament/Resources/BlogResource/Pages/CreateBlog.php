<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use App\Models\Blog;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

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
            $data['slug'] = \Str::slug($data['title']) . '-' . str()->random(5);
        }
        if (isset($data['title'])) {
            $data['user_id'] = Auth::user()->id;
        }
        return $data;
    }
}
