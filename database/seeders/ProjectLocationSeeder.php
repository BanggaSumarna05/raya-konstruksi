<?php

namespace Database\Seeders;

use App\Models\ProjectLocation;
use Illuminate\Database\Seeder;

/**
 * Marker peta — hasil migrasi dari hardcoded markers di MapMultipleMarker.vue.
 */
class ProjectLocationSeeder extends Seeder
{
    public function run(): void
    {
        $markers = [
            ['name' => 'Sumba',              'lat' => -9.6586,  'lng' => 120.2530],
            ['name' => 'Jakarta',            'lat' => -6.2088,  'lng' => 106.8456],
            ['name' => 'Riau (Pekanbaru)',   'lat' => 0.5071,   'lng' => 101.4478],
            ['name' => 'Sei Mangkei',        'lat' => 3.4579,   'lng' => 99.2143],
            ['name' => 'Balikpapan',         'lat' => -1.2654,  'lng' => 116.8312],
            ['name' => 'Batam',              'lat' => 1.0456,   'lng' => 104.0305],
        ];

        foreach ($markers as $i => $marker) {
            ProjectLocation::updateOrCreate(
                ['name' => $marker['name']],
                [
                    'lat'       => $marker['lat'],
                    'lng'       => $marker['lng'],
                    'order'     => $i + 1,
                    'is_active' => true,
                ]
            );
        }
    }
}
