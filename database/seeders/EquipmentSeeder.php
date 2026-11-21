<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Seeder;

/**
 * Data armada — hasil migrasi dari hardcoded fleet di equipment/index.vue.
 */
class EquipmentSeeder extends Seeder
{
    public function run(): void
    {
        $fleet = [
            ['brand' => 'HYUNDAI',      'type' => 'Excavator',            'model' => 'HX300',      'years' => '2024',      'qty' => 4],
            ['brand' => 'KOBELCO',      'type' => 'Excavator',            'model' => 'SK200',      'years' => '2015-2019', 'qty' => 15],
            ['brand' => 'CATERPILLAR',  'type' => 'Bulldozer',            'model' => 'D6GC',       'years' => '2022',      'qty' => 1],
            ['brand' => 'KOMATSU',      'type' => 'Bulldozer',            'model' => 'D85ESS-2',   'years' => '2015-2023', 'qty' => 2],
            ['brand' => 'SAKAI',        'type' => 'Compactor',            'model' => 'SV512DH',    'years' => '2015',      'qty' => 4],
            ['brand' => 'DYNAPAC',      'type' => 'Compactor',            'model' => 'CA250D',     'years' => '2017-2019', 'qty' => 7],
            ['brand' => 'CATERPILLAR',  'type' => 'Compactor',            'model' => '120K',       'years' => '2015',      'qty' => 1],
            ['brand' => 'CATERPILLAR',  'type' => 'Motor Grader',         'model' => '120K',       'years' => '2015',      'qty' => 2],
            ['brand' => 'HYUNDAI',      'type' => 'Motor Grader',         'model' => 'HG220',      'years' => '2023',      'qty' => 1],
            ['brand' => 'KOBELCO',      'type' => 'Motor Grader',         'model' => 'CKE 1800',   'years' => '2016',      'qty' => 1],
            ['brand' => 'KOBELCO',      'type' => 'Crawler Crane',        'model' => '7055-3F',    'years' => '2016-2017', 'qty' => 20],
            ['brand' => 'ZOOMLION',     'type' => 'Crawler Crane',        'model' => 'ZCC550H-1',  'years' => '2019',      'qty' => 8],
            ['brand' => 'HINO',         'type' => 'Crawler Crane',        'model' => 'FM285JD',    'years' => '2019',      'qty' => 1],
            ['brand' => 'DEMAG',        'type' => 'Crawler Crane',        'model' => 'CC2400',     'years' => '2016',      'qty' => 1],
            ['brand' => 'KATO',         'type' => 'Rough Terrain Crane',  'model' => 'SR250R',     'years' => '2015',      'qty' => 9],
            ['brand' => 'KATO',         'type' => 'Mobile Crane',         'model' => 'NK600RX',    'years' => '2015-2019', 'qty' => 10],
            ['brand' => 'GROVE',        'type' => 'Mobile Crane',         'model' => 'ZAT1000',    'years' => '2017-2019', 'qty' => 12],
            ['brand' => 'ZOOMLION',     'type' => 'Mobile Crane',         'model' => 'ZAT2500',    'years' => '2024',      'qty' => 8],
            ['brand' => 'HINO',         'type' => 'Dump Truck',           'model' => 'FM285JD',    'years' => '2019-2022', 'qty' => 38],
        ];

        foreach ($fleet as $i => $unit) {
            Equipment::updateOrCreate(
                [
                    'brand' => $unit['brand'],
                    'type'  => $unit['type'],
                    'model' => $unit['model'],
                ],
                [
                    'years'     => $unit['years'],
                    'qty'       => $unit['qty'],
                    'order'     => $i + 1,
                    'is_active' => true,
                ]
            );
        }
    }
}
