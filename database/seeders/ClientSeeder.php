<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            [
                'name' => 'Lotte Chemical',
                'logo' => 'assets/img/client/lotte-chemical.webp',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Pertamina',
                'logo' => 'assets/img/client/logo-pertamina.svg',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Air Products',
                'logo' => 'assets/img/client/logo-air-products.webp',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Unilever Oleochemical',
                'logo' => 'assets/img/client/logo-unilever.webp',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Apical Group',
                'logo' => 'assets/img/client/apical-retina.webp',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Jadestone Energy',
                'logo' => 'assets/img/client/logo-jadestone.webp',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Bukit Asam',
                'logo' => 'assets/img/client/bukit-asam.webp',
                'order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'OKI Pulp & Paper',
                'logo' => 'assets/img/client/OKI.webp',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Muria Sumba Manis',
                'logo' => 'assets/img/client/logo-msm.webp',
                'order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'Enerco',
                'logo' => 'assets/img/client/logo-enerco.webp',
                'order' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'Kine Jo',
                'logo' => 'assets/img/client/kine-jo-logo.webp',
                'order' => 11,
                'is_active' => true,
            ],
            [
                'name' => 'Casa Asraya',
                'logo' => 'assets/img/client/logo-asraya.webp',
                'order' => 12,
                'is_active' => true,
            ],
            [
                'name' => 'SWG',
                'logo' => 'assets/img/client/swg.webp',
                'order' => 13,
                'is_active' => true,
            ],
            [
                'name' => 'Maxiterm',
                'logo' => 'assets/img/client/maxiterm.webp',
                'order' => 14,
                'is_active' => true,
            ],
            [
                'name' => 'Tatamulia Nusantara Indah',
                'logo' => 'assets/img/client/tata.webp',
                'order' => 15,
                'is_active' => true,
            ],
            [
                'name' => 'Kilang Pertamina Internasional',
                'logo' => 'assets/img/client/logo-kpi.svg',
                'order' => 16,
                'is_active' => true,
            ],
            [
                'name' => 'Pupuk Indonesia',
                'logo' => 'assets/img/client/logo-pupuk.svg',
                'order' => 17,
                'is_active' => true,
            ],
        ];

        foreach ($clients as $clientData) {
            Client::updateOrCreate(
                ['name' => $clientData['name']],
                $clientData
            );
        }
    }
}
