<?php

namespace Database\Seeders;

use App\Models\SatuanBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SatuanBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kode' => 'kg',
                'nama' => 'kilogram'
            ],
            [
                'kode' => 'm',
                'nama' => 'Meter'
            ],
            [
                'kode' => 'lt',
                'nama' => 'Liter'
            ],
        ];

        SatuanBarang::insert($data);
    }
}
