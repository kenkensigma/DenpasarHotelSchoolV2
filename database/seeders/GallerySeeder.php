<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('galleries')->insert([
            [
                'images' => 'sample1.jpg',
                'description' => 'Kegiatan pembelajaran kelas digital',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'images' => 'sample2.jpg',
                'description' => 'Dokumentasi acara workshop IT',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'images' => 'sample3.jpg',
                'description' => 'Sesi presentasi project siswa',
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
