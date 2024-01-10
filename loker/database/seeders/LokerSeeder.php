<?php

namespace Database\Seeders;

use App\Models\Loker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LokerSeeder extends Seeder
{
    public function run(): void
    {
        $Lokers =  [
            [
                'id' => 'tt1746090',
                'namaperusahaan' => 'INTERBAL',
                'lokasi' => 'solok',
                'tahun' => 2023,
                'category_id' => 1,
                'foto_sampul' => '1.jpeg',
            ],
            [
                'id' => 'tt1746091',
                'namaperusahaan' => 'CITRA ASIA',
                'lokasi' => 'Bandung',
                'tahun' => 2023,
                'category_id' => 1,
                'foto_sampul' => '9.jpg',
            ],
            [
                'id' => 'tt1746092',
                'namaperusahaan' => 'ANGSA PURA II',
                'lokasi' => 'solok',
                'tahun' => 2023,
                'category_id' => 1,
                'foto_sampul' => '4.jpeg',
            ],
            [
                'id' => 'tt1746093',
                'namaperusahaan' => 'RamenYa',
                'lokasi' => 'Yogyakarta',
                'tahun' => 2023,
                'category_id' => 1,
                'foto_sampul' => '5.jpeg',
            ],
            [
                'id' => 'tt1746094',
                'namaperusahaan' => 'AlfaMidi',
                'lokasi' => 'Jakarta',
                'tahun' => 2023,
                'category_id' => 1,
                'foto_sampul' => '6.jpeg',
            ],
            [
                'id' => 'tt1746095',
                'namaperusahaan' => 'Bandung',
                'lokasi' => 'PKU',
                'tahun' => 2023,
                'category_id' => 1,
                'foto_sampul' => '7.jpeg',
            ],
            [
                'id' => 'tt1746096',
                'namaperusahaan' => 'IndoMobil',
                'lokasi' => 'padang',
                'tahun' => 2023,
                'category_id' => 1,
                'foto_sampul' => '8.jpeg',
            ],

        ];
        foreach ($Lokers as $Loker) {
            Loker::create($Loker);
        }
    }
}
