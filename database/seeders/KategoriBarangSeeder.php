<?php

namespace Database\Seeders;

use App\Models\KategoriBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode' => 'kts',
                'nama' => 'Kitchen set'
            ],
            [
                'kode' => 'bds',
                'nama' => 'Bedroom Set'
            ],
            [
                'kode' => 'fms',
                'nama' => 'Family room set'
            ],
        ];

        KategoriBarang::insert($data);
    }
}
