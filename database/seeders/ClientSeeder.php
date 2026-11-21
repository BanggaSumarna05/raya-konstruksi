<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

/**
 * Sinkronisasi data client dengan data yang sebelumnya hardcoded
 * di FrontController (getStaticClients + getHeroClients).
 *
 * CATATAN: seeder ini MENIMPA data client di database.
 * Is_hero = client yang tampil di carousel hero homepage.
 */
class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            # ── 14 client hero (carousel homepage) ──
            ['name' => 'PT Muria Sumba Manis',               'logo' => 'assets/img/client/logo-msm.webp',           'order' => 1,  'is_hero' => true],
            ['name' => 'Pertamina RU V',                     'logo' => 'assets/img/client/Pertamina RU V.png',      'order' => 2,  'is_hero' => true],
            ['name' => 'PT Lotte Chemical Indonesia',        'logo' => 'assets/img/client/lotte-chemical.webp',     'order' => 3,  'is_hero' => true],
            ['name' => 'PT Air Products Indonesia Gases',    'logo' => 'assets/img/client/logo-air-products.webp',  'order' => 4,  'is_hero' => true],
            ['name' => 'OKI Pulp & Paper',                   'logo' => 'assets/img/client/logo_OKI.svg',            'order' => 5,  'is_hero' => true],
            ['name' => 'Apical / RGE Group',                 'logo' => 'assets/img/client/apical-retina.webp',      'order' => 6,  'is_hero' => true],
            ['name' => 'PT Unilever Oleochemical Indonesia', 'logo' => 'assets/img/client/logo-unilever.webp',      'order' => 7,  'is_hero' => true],
            ['name' => 'Jadestone Energy',                   'logo' => 'assets/img/client/logo-jadestone.webp',     'order' => 8,  'is_hero' => true],
            ['name' => 'PT Casa Asraya Properti',            'logo' => 'assets/img/client/logo-asraya.webp',        'order' => 9,  'is_hero' => true],
            ['name' => 'PT Tatamulia Nusantara Indah',       'logo' => 'assets/img/client/tata.webp',               'order' => 10, 'is_hero' => true],
            ['name' => 'SWG',                                'logo' => 'assets/img/client/swg.webp',                'order' => 15, 'is_hero' => true],
            ['name' => 'Maxiterm',                           'logo' => 'assets/img/client/maxiterm.webp',           'order' => 16, 'is_hero' => true],
            ['name' => 'Kine Jo',                            'logo' => 'assets/img/client/kine-jo-logo.webp',       'order' => 17, 'is_hero' => true],
            ['name' => 'Enerco',                             'logo' => 'assets/img/client/logo-enerco.webp',        'order' => 18, 'is_hero' => true],

            # ── Client lain (halaman clients & partners) ──
            ['name' => 'Pupuk Indonesia Logistik',           'logo' => 'assets/img/client/logo-pupuk.webp',                        'order' => 11, 'is_hero' => false],
            ['name' => 'Pindo Deli',                         'logo' => 'assets/img/client/logo_pindo_deli.webp',                   'order' => 12, 'is_hero' => false],
            ['name' => 'Bagus Karya',                        'logo' => 'assets/img/client/PT Bagus Karya.webp',                    'order' => 13, 'is_hero' => false],
            ['name' => 'ISS (Indo Sutech)',                  'logo' => 'assets/img/client/pt_indo_sutech_sejahtera_logo.webp',     'order' => 14, 'is_hero' => false],
            ['name' => 'Kutai Refinery Nusantara',           'logo' => null, 'order' => 19, 'is_hero' => false],
            ['name' => 'Sari Dumai Oleo',                    'logo' => null, 'order' => 20, 'is_hero' => false],
            ['name' => 'Asianagro Agungjaya',                'logo' => null, 'order' => 21, 'is_hero' => false],
            ['name' => 'Cirebon Energi Prasarana',           'logo' => null, 'order' => 22, 'is_hero' => false],
            ['name' => 'Halmahera Sukses Mineral',           'logo' => null, 'order' => 23, 'is_hero' => false],
            ['name' => 'PT Rekayasa Industri',               'logo' => null, 'order' => 24, 'is_hero' => false],
            ['name' => 'PT KLI (Konstruksi Lintas Internasional)', 'logo' => null, 'order' => 25, 'is_hero' => false],
        ];

        foreach ($clients as $client) {
            Client::updateOrCreate(
                ['name' => $client['name']],
                [
                    'logo'      => $client['logo'],
                    'order'     => $client['order'],
                    'is_hero'   => $client['is_hero'],
                    'is_active' => true,
                ]
            );
        }
    }
}
