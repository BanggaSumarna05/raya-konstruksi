<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Clear existing
        Project::truncate();

        $projects = [
            [
                'title'        => 'UOI Turnaround & Maintenance Project',
                'slug'         => 'uoi-turnaround-maintenance',
                'client'       => 'PT Unilever Oleochemical Indonesia',
                'duration'     => 'Nov 2024 – Aug 2025',
                'location'     => 'Sei Mangkei, Sumut',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Turnaround and maintenance project for PT Unilever Oleochemical Indonesia covering mechanical, piping, civil, and electrical works.',
                'image'        => '/assets/img/projects/uoi-1/uoi-1 (1).webp',
                'gallery'      => [
                    '/assets/img/projects/uoi-1/uoi-1 (1).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (2).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (3).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (4).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (5).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (6).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (7).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (8).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (9).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (10).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (11).webp',
                    '/assets/img/projects/uoi-1/uoi-1 (12).webp',
                ],
            ],
            [
                'title'        => 'Project Management & Construction Sugar Refinery Plant',
                'slug'         => 'msm-sugar-refinery-construction',
                'client'       => 'PT Muria Sumba Manis',
                'duration'     => 'Jan 2020 – Jun 2022',
                'location'     => 'Sumba, NTB',
                'service_type' => 'Fabrication & Construction',
                'description'  => 'Comprehensive project management and construction for sugar refinery plant including civil, mechanical, and piping works.',
                'image'        => '/assets/img/projects/msm/cover.webp',
                'gallery'      => [
                    '/assets/img/projects/msm/msm-1.webp',
                    '/assets/img/projects/msm/msm-2.webp',
                    '/assets/img/projects/msm/msm-4.webp',
                    '/assets/img/projects/msm/msm-5.webp',
                    '/assets/img/projects/msm/msm-6.webp',
                    '/assets/img/projects/msm/msm-7.webp',
                    '/assets/img/projects/msm/msm-8.webp',
                    '/assets/img/projects/msm/msm-9.webp',
                    '/assets/img/projects/msm/msm-10.webp',
                    '/assets/img/projects/msm/msm-11.webp',
                    '/assets/img/projects/msm/msm-12.webp',
                    '/assets/img/projects/msm/msm-13.webp',
                    '/assets/img/projects/msm/msm-14.webp',
                ],
            ],
            [
                'title'        => 'RDMP Balikpapan JO',
                'slug'         => 'rdmp-balikpapan',
                'client'       => 'Pertamina RU V',
                'duration'     => 'Mar 2022 – Feb 2025',
                'location'     => 'Balikpapan, Kaltim',
                'service_type' => 'Fabrication & Construction',
                'description'  => 'RDMP RU-V Balikpapan refinery construction and maintenance project covering ISBL & OSBL tanks, piping, insulation and painting.',
                'image'        => '/assets/img/projects/rdmp/cover.webp',
                'gallery'      => [
                    '/assets/img/projects/rdmp/rdmp-1.webp',
                    '/assets/img/projects/rdmp/rdmp-2.webp',
                    '/assets/img/projects/rdmp/rdmp-3.webp',
                    '/assets/img/projects/rdmp/rdmp-4.webp',
                    '/assets/img/projects/rdmp/rdmp-5.webp',
                    '/assets/img/projects/pertamina-1/gal-1.png',
                    '/assets/img/projects/pertamina-1/gal-2.jpeg',
                ],
            ],
            [
                'title'        => 'LINE Ethylene Plant Construction Project',
                'slug'         => 'line-ethylene-lotte-chemical',
                'client'       => 'PT Lotte Chemical Indonesia',
                'duration'     => 'Jan 2023 – Nov 2024',
                'location'     => 'Cilegon, Banten',
                'service_type' => 'Fabrication & Construction',
                'description'  => 'Structure, mechanical, and piping construction for LINE Ethylene Plant including GHU catalyst loading and manpower/equipment supply.',
                'image'        => '/assets/img/projects/lotte/cover.webp',
                'gallery'      => [
                    '/assets/img/projects/lotte/lotte-1.webp',
                    '/assets/img/projects/lotte/lotte-2.webp',
                    '/assets/img/projects/lotte/lotte-3.webp',
                    '/assets/img/projects/lotte/lotte-4.webp',
                    '/assets/img/projects/lotte/lotte-5.webp',
                    '/assets/img/projects/lotte/lotte-6.webp',
                ],
            ],
            [
                'title'        => 'Air Products SMIP Mechanical & Piping',
                'slug'         => 'air-products-smip',
                'client'       => 'PT Air Products Indonesia Gases',
                'duration'     => 'Oct 2023 – Jun 2025',
                'location'     => 'Sei Mangkei, Sumut',
                'service_type' => 'Fabrication & Construction',
                'description'  => 'Mechanical and piping construction and installation for Air Products SMIP project including SMR reactors and adsorbers catalyst loading.',
                'image'        => '/assets/img/projects/airproduct/cover-1.webp',
                'gallery'      => [
                    '/assets/img/projects/airproduct/cover-1.webp',
                ],
            ],
            [
                'title'        => 'Catalyst Handling Lotte Chemical',
                'slug'         => 'catalyst-handling-lotte',
                'client'       => 'PT Lotte Chemical Indonesia',
                'duration'     => 'Nov 2024 – Dec 2024',
                'location'     => 'Cilegon, Banten',
                'service_type' => 'Catalyst Handling',
                'description'  => 'Professional catalyst loading and handling for GHU I, II and Clay Towers at LINE Ethylene Plant.',
                'image'        => '/assets/img/projects/lotte-catalyst/catalyst-3.webp',
                'gallery'      => [
                    '/assets/img/projects/lotte-catalyst/catalyst (1).webp',
                    '/assets/img/projects/lotte-catalyst/catalyst (2).webp',
                    '/assets/img/projects/lotte-catalyst/catalyst (4).webp',
                    '/assets/img/projects/lotte-catalyst/catalyst (5).webp',
                    '/assets/img/projects/lotte-catalyst/catalyst-3.webp',
                ],
            ],
            [
                'title'        => 'Akatara Commissioning Support',
                'slug'         => 'akatara-commissioning',
                'client'       => 'Jadestone Energy Lemang, Pte., Ltd.',
                'duration'     => 'Mar 2024 – Aug 2024',
                'location'     => 'Jambi, Indonesia',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Commissioning support and manpower supply for Akatara gas project.',
                'image'        => '/assets/img/projects/akatara/cover.webp',
                'gallery'      => [
                    '/assets/img/projects/akatara/akatara (1).webp',
                    '/assets/img/projects/akatara/akatara (2).webp',
                    '/assets/img/projects/akatara/akatara (3).webp',
                    '/assets/img/projects/akatara/akatara (4).webp',
                ],
            ],
            [
                'title'        => 'Enerco Civil & Construction Works',
                'slug'         => 'enerco-civil-construction',
                'client'       => 'Enerco',
                'duration'     => '2023 – 2024',
                'location'     => 'Indonesia',
                'service_type' => 'Civil & Road Works',
                'description'  => 'Civil and construction works project for Enerco.',
                'image'        => '/assets/img/projects/enerco-1/enerco-1.webp',
                'gallery'      => [
                    '/assets/img/projects/enerco-1/enerco-1.webp',
                    '/assets/img/projects/enerco-1/enerco-2.webp',
                    '/assets/img/projects/enerco-1/enerco-3.webp',
                    '/assets/img/projects/enerco-1/enerco-4.webp',
                    '/assets/img/projects/enerco-1/enerco-5.webp',
                ],
            ],
            [
                'title'        => 'Road Maintenance Package',
                'slug'         => 'halmahera-road-maintenance',
                'client'       => 'Halmahera Sukses Mineral',
                'duration'     => 'Jun 2023 – May 2025',
                'location'     => 'Halmahera',
                'service_type' => 'Civil & Road Works',
                'description'  => 'Road maintenance package for mining operations in Halmahera.',
                'image'        => '/assets/img/projects/header-msm-1.webp',
                'gallery'      => [],
            ],
            [
                'title'        => 'Construction Work Pesona Hutan Asraya',
                'slug'         => 'asraya-housing-development',
                'client'       => 'PT Casa Asraya Properti',
                'duration'     => 'Jul 2025 – Apr 2026',
                'location'     => 'Pekanbaru, Riau',
                'service_type' => 'Civil & Road Works',
                'description'  => 'Construction of housing development Pesona Hutan Asraya including civil and structural works.',
                'image'        => '/assets/img/projects/construction-1.webp',
                'gallery'      => [],
            ],
        ];

        foreach ($projects as $data) {
            Project::create($data);
        }
    }
}
