<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectLocation extends Model
{
    protected $fillable = [
        'name',
        'lat',
        'lng',
        'order',
        'is_active',
    ];

    protected $casts = [
        'lat' => 'float',
        'lng' => 'float',
        'order' => 'integer',
        'is_active' => 'boolean',
    ];
}
