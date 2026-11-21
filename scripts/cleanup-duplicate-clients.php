<?php

/**
 * Script sekali-pakai: bersihkan 11 client duplikat / sisa seeder lama.
 *
 * Jalankan di terminal (dari root project):
 *   php scripts/cleanup-duplicate-clients.php
 *
 * Data dihapus dengan forceDelete (permanen) karena murni duplikat.
 * Cache client di-reset otomatis oleh model event.
 */

require __DIR__ . '/../vendor/autoload.php';
$app = require __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Client;

$duplicates = [
    'Lotte Chemical',               // duplikat PT Lotte Chemical Indonesia
    'Pertamina',                    // duplikat Pertamina RU V
    'Air Products',                 // duplikat PT Air Products Indonesia Gases
    'Unilever Oleochemical',        // duplikat PT Unilever Oleochemical Indonesia
    'Apical Group',                 // duplikat Apical / RGE Group
    'Muria Sumba Manis',            // duplikat PT Muria Sumba Manis
    'Casa Asraya',                  // duplikat PT Casa Asraya Properti
    'Tatamulia Nusantara Indah',    // duplikat PT Tatamulia Nusantara Indah
    'Pupuk Indonesia',              // duplikat Pupuk Indonesia Logistik
    'Bukit Asam',                   // sisa seeder lama
    'Kilang Pertamina Internasional', // sisa seeder lama
];

echo "Menghapus " . count($duplicates) . " client duplikat...\n";

$deleted = 0;
foreach ($duplicates as $name) {
    $client = Client::where('name', $name)->first();
    if ($client) {
        $client->forceDelete();
        $deleted++;
        echo "  - terhapus: {$name}\n";
    }
}

echo "\nTotal terhapus: {$deleted}\n";
echo 'Sisa client: ' . Client::count()
    . ' | hero: ' . Client::where('is_hero', 1)->count()
    . ' | aktif: ' . Client::where('is_active', 1)->count() . "\n";
