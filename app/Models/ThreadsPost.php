<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThreadsPost extends Model
{
    public const URL_PATTERN = '~threads\.(?:net|com)/@([A-Za-z0-9._]+)/post/([A-Za-z0-9_-]+)~i';

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
            return "https://www.threads.net/@{$match[1]}/post/{$match[2]}";
        }

        return $this->url;
    }

    public function getEmbedUrlAttribute(): ?string
    {
        if (preg_match(self::URL_PATTERN, (string) $this->url, $match)) {
            return "https://www.threads.net/@{$match[1]}/post/{$match[2]}/embed";
        }

        return $this->url;
    }
}
