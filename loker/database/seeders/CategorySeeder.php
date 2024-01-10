<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nama_kategori' => 'Perusahaan',
                'keterangan' => 'wanita'
            ],
            [
                'nama_kategori' => 'Pt',
                'keterangan' => 'pria'
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
