<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'status' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'Disewa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'Dalam Perawatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'Booking Menunggu Konfirmasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'status' => 'Tidak Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        DB::table('statuses')->insert($status);
    }
}
