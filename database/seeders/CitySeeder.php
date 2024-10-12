<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data nama kota di Indonesia
        $cities = [
            ['name' => 'Jakarta'],
            ['name' => 'Surabaya'],
            ['name' => 'Bandung'],
            ['name' => 'Medan'],
            ['name' => 'Semarang'],
            ['name' => 'Makassar'],
            ['name' => 'Palembang'],
            ['name' => 'Tangerang'],
            ['name' => 'Denpasar'],
            ['name' => 'Yogyakarta'],
            ['name' => 'Balikpapan'],
            ['name' => 'Pekanbaru'],
            ['name' => 'Malang'],
            ['name' => 'Solo'],
            ['name' => 'Manado'],
            ['name' => 'Pontianak'],
            ['name' => 'Banjarmasin'],
            ['name' => 'Padang'],
            ['name' => 'Batam'],
            ['name' => 'Samarinda'],
        ];

        // Insert data ke tabel 'cities'
        DB::table('cities')->insert($cities);
    }
}
