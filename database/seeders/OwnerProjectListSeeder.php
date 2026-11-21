<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Seeder;

// Source: project list supplied by the site owner on 2026-11-14. Adds only; never overwrites existing rows.
class OwnerProjectListSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            'Pindo Deli'                               => 'assets/img/client/logo_pindo_deli.webp',
            'Bagus Karya'                              => 'assets/img/client/PT Bagus Karya.webp',
            'PT KLI (Konstruksi Lintas Internasional)' => null,
        ];

        $order = (int) Client::max('order');
        foreach ($clients as $name => $logo) {
            Client::firstOrCreate(
                ['name' => $name],
                ['logo' => $logo, 'order' => ++$order, 'is_active' => true]
            );
        }

        foreach (self::projects() as $data) {
            Project::firstOrCreate(['slug' => $data['slug']], $data);
        }
    }

    public static function projects(): array
    {
        $projects = [
            [
                'title'        => 'Civil Works SI-37 & SI-47',
                'slug'         => 'pindo-deli-civil-works-si-37-si-47',
                'client'       => 'PT Pindo Deli (Sinar Mas)',
                'duration'     => null,
                'location'     => 'Karawang, Jabar',
                'service_type' => 'Civil & Road Works',
                'description'  => 'Civil works for SI-37 and SI-47.',
                'folder'       => 'Pindo Deli',
                'cover'        => 'WhatsApp Image 2026-10-29 at 12.27.09 (1).jpeg',
            ],
            [
                'title'        => 'Electrical Works Package 1',
                'slug'         => 'bagus-karya-pln-electrical-works-package-1',
                'client'       => 'PT Bagus Karya',
                'duration'     => null,
                'location'     => 'Dumai, Riau',
                'service_type' => 'Fabrication & Construction',
                'description'  => 'Electrical works package 1 for PLN.',
                'folder'       => 'Bagus Karya',
                'cover'        => 'WhatsApp Image 2026-11-03 at 15.02.55 (1).jpeg',
            ],
            [
                'title'        => 'MMD Package',
                'slug'         => 'oki-mmd-package',
                'client'       => 'OKI Pulp & Paper (Sinar Mas)',
                'duration'     => null,
                'location'     => 'Palembang, Sumsel',
                'service_type' => 'Civil & Road Works',
                'description'  => 'MMD package.',
                'folder'       => 'MMD OKKI',
                'cover'        => 'WhatsApp Image 2026-11-03 at 16.29.42.jpeg',
            ],
            [
                'title'        => 'CSA Work Project Mini LNG Bojonegoro',
                'slug'         => 'kli-csa-work-mini-lng-bojonegoro',
                'client'       => 'PT KLI (Konstruksi Lintas Internasional)',
                'duration'     => 'Oct 2026 – Present',
                'location'     => 'Bojonegoro, Jatim',
                'service_type' => 'Civil & Road Works',
                'description'  => 'CSA works for the Mini LNG project in Bojonegoro.',
                'folder'       => 'CSA Wok Mini LNG Bojonegoro',
                'cover'        => 'WhatsApp Image 2026-11-12 at 09.59.28.jpeg',
            ],
        ];

        return array_map(function (array $p) {
            $base = '/assets/img/projects/' . $p['folder'] . '/';
            $files = array_filter(
                glob(public_path(ltrim($base, '/')) . '*') ?: [],
                fn ($f) => preg_match('/\.(jpe?g|png|webp)$/i', $f)
            );
            sort($files);
            $gallery = array_map(fn ($f) => $base . basename($f), $files);
            $cover = $base . $p['cover'];
            $gallery = array_values(array_unique(array_merge([$cover], $gallery)));

            unset($p['folder'], $p['cover']);

            return $p + ['image' => $cover, 'gallery' => $gallery];
        }, $projects);
    }
}
