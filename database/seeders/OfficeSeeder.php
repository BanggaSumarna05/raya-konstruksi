<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;

/**
 * Data kantor — hasil migrasi dari hardcoded offices di 1contact.vue.
 */
class OfficeSeeder extends Seeder
{
    public function run(): void
    {
        $offices = [
            [
                'name'     => 'Head Office',
                'icon'     => 'bi-building',
                'address'  => "Talavera Office Park, 15th Floor\nJl. TB Simatupang No. 23, RT 3/RW 1,\nCilandak Barat, Kec. Cilandak,\nJakarta Selatan 12430",
                'maps_url' => 'https://www.google.com/maps/place/Talavera+Office+Park/@-6.2912807,106.8010619,17z/',
                'order'    => 1,
            ],
            [
                'name'     => 'Workshop',
                'icon'     => 'bi-tools',
                'address'  => "Jl. Balai Kimia | 15, RT 15/RW 9,\nPekayon, Kec. Ps. Rebo,\nJakarta Timur 13790",
                'maps_url' => 'https://www.google.com/maps/search/Jl.+Balai+Kimia+l+15,+RT+15%2FRW+9,+Pekayon/',
                'order'    => 2,
            ],
            [
                'name'     => 'Riau Office',
                'icon'     => 'bi-geo-alt',
                'address'  => "Jl. Dwikora I No. 16,\nKel. Suka Maju, Kec. Sail,\nPekanbaru, Kepulauan Riau",
                'maps_url' => 'https://www.google.com/maps/place/Jl.+Dwikora+I+No.16,+Suka+Maju/',
                'order'    => 3,
            ],
            [
                'name'     => 'Surabaya Office',
                'icon'     => 'bi-geo-alt',
                'address'  => "Perumahan Royal Residence\nCluster Serenade Blok B7 No. 85\nWiyung, Surabaya",
                'maps_url' => 'https://www.google.com/maps/place/Royal+Residence+Cluster+Serenade/',
                'embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.283641018357!2d112.67594177500038!3d-7.322002892686151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fdbff6665413%3A0x7e1cd06e96af4593!2sRoyal%20Residence%20Cluster%20Serenade!5e0!3m2!1sid!2sid!4v1790456609413!5m2!1sid!2sid',
                'order'    => 4,
            ],
            [
                'name'     => 'Karawang Office',
                'icon'     => 'bi-geo-alt',
                'address'  => "Jl. Nakula Raya No. 272 Perumnas Blok S,\nKec. Telukjambe Timur, Desa Sukaluyu,\nKab. Karawang, Jawa Barat",
                'maps_url' => 'https://www.google.com/maps/place/Perumnas+Bumi+Teluk+Jambe/',
                'embed_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.983573060424!2d107.27523567770994!3d-6.330267999999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699d00707bc461%3A0xa7af131a00ada0e2!2sPerumnas%20Bumi%20Teluk%20Jambe%2C%20Blok%20S%2C%20Sukaluyu%2C%20Telukjambe%20Timur%2C%20Karawang!5e0!3m2!1sid!2sid!4v1790457041704!5m2!1sid!2sid',
                'order'    => 5,
            ],
        ];

        foreach ($offices as $office) {
            Office::updateOrCreate(
                ['name' => $office['name']],
                $office
            );
        }
    }
}
