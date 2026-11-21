<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
    ];

    /**
     * Ambil nilai setting dengan cache + fallback default.
     */
    public static function get(string $key, ?string $default = null): ?string
    {
        return Cache::remember(
            "setting_{$key}",
            now()->addHours(6),
            fn () => static::query()->where('key', $key)->value('value') ?? $default
        );
    }

    /**
     * Simpan/ubah nilai setting (menghapus cache-nya).
     */
    public static function put(string $key, ?string $value): void
    {
        static::updateOrCreate(['key' => $key], ['value' => $value]);
        Cache::forget("setting_{$key}");
    }
}
