<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstagramPost extends Model
{
    public const URL_PATTERN = '~instagram\.com/(p|reel|reels|tv)/([A-Za-z0-9_-]+)~i';

    protected $fillable = [
        'url',
        'order',
        'is_active',
    ];

    protected $casts = [
        'order' => 'integer',
        'is_active' => 'boolean',
    ];

    public function getPostUrlAttribute(): ?string
    {
        if (preg_match(self::URL_PATTERN, (string) $this->url, $match)) {
            $type = strtolower($match[1]) === 'reels' ? 'reels' : strtolower($match[1]);

            return "https://www.instagram.com/{$type}/{$match[2]}/";
        }

        return $this->url;
    }

    public function getEmbedUrlAttribute(): ?string
    {
        if (preg_match(self::URL_PATTERN, (string) $this->url, $match)) {
            $type = strtolower($match[1]) === 'reels' ? 'reels' : strtolower($match[1]);

            return "https://www.instagram.com/{$type}/{$match[2]}/embed";
        }

        return $this->url;
    }
}
