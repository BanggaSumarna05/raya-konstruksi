<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Database\Seeder;

// Source: Company Profile A4 Landscape (New Logo) 210526. Adds only; never overwrites seeded rows.
class ComproUpdateSeeder extends Seeder
{
    public function run(): void
    {
        $clients = [
            'Kutai Refinery Nusantara',
            'Sari Dumai Oleo',
            'Asianagro Agungjaya',
            'Cirebon Energi Prasarana',
            'Halmahera Sukses Mineral',
            'PT Rekayasa Industri',
        ];

        $order = (int) Client::max('order');
        foreach ($clients as $name) {
            Client::firstOrCreate(
                ['name' => $name],
                ['logo' => null, 'order' => ++$order, 'is_active' => true]
            );
        }

        $projects = [
            [
                'title'        => 'Pertamina RDMP RU V Water Treatment Plant',
                'slug'         => 'rdmp-ru-v-water-treatment-plant',
                'client'       => 'PT Rekayasa Industri',
                'duration'     => 'Feb 2020 – Jul 2021',
                'location'     => 'Balikpapan, Kaltim',
                'service_type' => 'Fabrication & Construction',
                'description'  => 'Water treatment plant works for the Pertamina RDMP RU V Balikpapan refinery development.',
            ],
            [
                'title'        => 'Turnaround Piping RU-V Balikpapan',
                'slug'         => 'turnaround-piping-ru-v-balikpapan',
                'client'       => 'JGC Indonesia',
                'duration'     => 'Jul 2022 – Aug 2022',
                'location'     => 'Balikpapan, Kaltim',
                'service_type' => 'Fabrication & Construction',
                'description'  => 'Piping, insulation and painting for the carbon steel piping system in the HCC area during the RU-V Balikpapan turnaround.',
            ],
            [
                'title'        => 'Air Products SMR Reactors & Adsorbers Catalyst Loading',
                'slug'         => 'air-products-smr-catalyst-loading',
                'client'       => 'PT Air Products Indonesia Gases',
                'duration'     => 'Mar 2025 – Apr 2025',
                'location'     => 'Sei Mangkei, Sumut',
                'service_type' => 'Catalyst Handling',
                'description'  => 'Catalyst loading for SMR reactors and adsorbers.',
            ],
            [
                'title'        => 'Road Construction Package',
                'slug'         => 'bukit-asam-road-construction',
                'client'       => 'Bukit Asam',
                'duration'     => 'Dec 2024 – Aug 2025',
                'location'     => 'Indonesia',
                'service_type' => 'Civil & Road Works',
                'description'  => 'Road construction package.',
            ],
            [
                'title'        => 'Refinery Maintenance & Civil Repair Project',
                'slug'         => 'apical-refinery-maintenance-civil-repair',
                'client'       => 'Apical Group',
                'duration'     => 'Oct 2025 – Dec 2025',
                'location'     => 'Balikpapan, Kaltim',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Refinery maintenance and civil repair works.',
            ],
            [
                'title'        => 'Kutai Refinery Nusantara Facility & Project Plant',
                'slug'         => 'kutai-refinery-facility-project-plant',
                'client'       => 'Kutai Refinery Nusantara (Apical - RGE)',
                'duration'     => 'Oct 2025 – Apr 2026',
                'location'     => 'Balikpapan, Kaltim',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Facility and project plant works: floor and wall repair at Refinery 1, 2, 3 & 5, Room Mess D repair, meeting room and gutter repair, and concrete pavement at Refinery 3 and 4.',
            ],
            [
                'title'        => 'Kutai Refinery Nusantara Maintenance Plant',
                'slug'         => 'kutai-refinery-maintenance-plant',
                'client'       => 'Kutai Refinery Nusantara (Apical - RGE)',
                'duration'     => 'Feb 2026 – Present',
                'location'     => 'Balikpapan, Kaltim',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Plant maintenance including roofing replacement for WTP #3.',
            ],
            [
                'title'        => 'Sari Dumai Oleo Maintenance Plant',
                'slug'         => 'sari-dumai-oleo-maintenance-plant',
                'client'       => 'Sari Dumai Oleo (Apical - RGE)',
                'duration'     => 'Dec 2025',
                'location'     => 'Marunda, Jakut',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Cleaning and repair of the demin sand filter tank.',
            ],
            [
                'title'        => 'UOI Shutdown Maintenance & Project Plant',
                'slug'         => 'uoi-shutdown-maintenance-project-plant',
                'client'       => 'PT Unilever Oleochemical Indonesia',
                'duration'     => 'Dec 2025 – Present',
                'location'     => 'Sei Mangkei, Sumut',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Shutdown maintenance and plant project works including quality office roof leak repair, galvanized raw water pipe replacement, sluice gate repair, pocket drains for medium and high pressure steam utility, a new bund wall in Soap 2 and new biomass storage stormwater drainage.',
            ],
            [
                'title'        => 'Commissioning Project, Tennet Capex Project, McDermott',
                'slug'         => 'tatamulia-mcdermott-commissioning-batam',
                'client'       => 'Tatamulia Nusantara Indah',
                'duration'     => 'Jan 2026 – Present',
                'location'     => 'Batam',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Construction services for the McDermott project in Batam under agreement with PT Tatamulia Nusantara Indah.',
            ],
            [
                'title'        => 'Pupuk Indonesia Logistik Ship Maintenance',
                'slug'         => 'pupuk-indonesia-logistik-ship-maintenance',
                'client'       => 'Pupuk Indonesia Logistik (PIHC)',
                'duration'     => 'Jan 2026 – Present',
                'location'     => 'Palembang, Sumsel',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Mochtar Prabu maintenance package.',
            ],
            [
                'title'        => 'Asianagro Agungjaya Maintenance Plant',
                'slug'         => 'asianagro-agungjaya-maintenance-plant',
                'client'       => 'PT Asianagro Agungjaya (Apical - RGE)',
                'duration'     => 'Feb 2026 – Present',
                'location'     => 'Marunda, Jakut',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Fabrication and installation of an air compressor, manpower supply for electrical works, and tie-in of the air compressor, chiller, condenser and cooling tower.',
            ],
            [
                'title'        => 'Roofing Siding Installation and Piping Works',
                'slug'         => 'apical-roofing-siding-piping-works',
                'client'       => 'Apical Group',
                'duration'     => 'Mar 2026 – Jun 2026',
                'location'     => 'Indonesia',
                'service_type' => 'Fabrication & Construction',
                'description'  => 'Roofing siding installation and piping works.',
            ],
            [
                'title'        => 'Low Pressure CO2 Storage Tank System Overhaul',
                'slug'         => 'cirebon-co2-storage-tank-overhaul',
                'client'       => 'Cirebon Energi Prasarana (Cirebon Power)',
                'duration'     => 'Apr 2026 – Oct 2026',
                'location'     => 'Cirebon',
                'service_type' => 'Operation & Maintenance',
                'description'  => 'Service work for troubleshooting and overhaul of the low pressure CO2 storage tank system.',
            ],
            [
                'title'        => 'OKI1 Tissue MEIA Installation of 1 Set Rewinder',
                'slug'         => 'oki-tissue-meia-rewinder-installation',
                'client'       => 'OKI Pulp & Paper',
                'duration'     => 'Apr 2026 – Jul 2026',
                'location'     => 'Palembang, Sumsel',
                'service_type' => 'Fabrication & Construction',
                'description'  => 'MEIA installation of one set of rewinder for OKI1 Tissue.',
            ],
        ];

        foreach ($projects as $data) {
            Project::firstOrCreate(
                ['slug' => $data['slug']],
                $data + ['image' => null, 'gallery' => []]
            );
        }
    }
}
