<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'logo',
        'order',
        'is_active',
        'url',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    protected $appends = [
        'logo_url',
    ];

    public function getLogoUrlAttribute(): string
    {
        if (!$this->logo) {
            return asset('assets/img/placeholder.jpg');
        }

        if (str_starts_with($this->logo, 'http://') || str_starts_with($this->logo, 'https://')) {
            return $this->logo;
        }

        $logoPath = ltrim($this->logo, '/');

        if (str_starts_with($logoPath, 'assets/')) {
            return asset($logoPath);
        }

        return asset('storage/' . $logoPath);
    }
}
