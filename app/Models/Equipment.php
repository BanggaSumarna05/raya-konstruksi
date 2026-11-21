<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    protected $table = 'equipments';

    protected $fillable = [
        'brand',
        'type',
        'model',
        'years',
        'qty',
        'order',
        'is_active',
    ];

    protected $casts = [
        'qty' => 'integer',
        'order' => 'integer',
        'is_active' => 'boolean',
    ];
}
