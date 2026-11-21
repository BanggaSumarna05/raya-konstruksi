<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class LinkedinPost extends Model
{
    public const URL_PATTERN = '~^https?://(?:[a-z]{2,3}\.)?linkedin\.com/embed/~i';

    protected $fillable = [
        'url',
        'order',
        'is_active',
    ];

    protected $casts = [
        'order' => 'integer',
        'is_active' => 'boolean',
    ];

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget('career_linkedin_posts'));
        static::deleted(fn () => Cache::forget('career_linkedin_posts'));
    }
}
