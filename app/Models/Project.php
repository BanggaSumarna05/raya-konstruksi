<?php

namespace App\Models;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'client',
        'duration',
        'location',
        'service_type',
        'image',
        'description',
        'gallery',
    ];

    protected $casts = [
        'gallery' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    public function getImageUrlAttribute(): string
    {
        if (!$this->image) return asset('assets/img/hero-carousel/hover-1-new.webp');
        if (str_starts_with($this->image, 'http') || str_starts_with($this->image, '/assets')) return $this->image;
        return asset('storage/' . $this->image);
    }

    public function getGalleryUrlsAttribute(): array
    {
        if (!$this->gallery) return [];
        return array_map(function ($path) {
            if (str_starts_with($path, 'http') || str_starts_with($path, '/assets')) return $path;
            return asset('storage/' . $path);
        }, $this->gallery);
    }

    /**
     * Mulai proyek dari kolom periode ("Nov 2024 – Aug 2025" → 2024-11-01),
     * dipakai untuk mengurutkan daftar proyek dari yang terbaru.
     */
    public function getStartedAtAttribute(): ?CarbonImmutable
    {
        if (!$this->duration) return null;

        if (preg_match('/^([A-Za-z]{3,9})\.?,?\s+(\d{4})/', trim($this->duration), $m)) {
            return CarbonImmutable::createFromFormat(
                '!M Y',
                ucfirst(substr($m[1], 0, 3)) . ' ' . $m[2]
            ) ?: null;
        }

        if (preg_match('/^(\d{4})/', trim($this->duration), $m)) {
            return CarbonImmutable::create($m[1] . '-01-01');
        }

        return null;
    }
}
