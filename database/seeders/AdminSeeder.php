<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // Cek apakah admin sudah ada
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'), // Password yang sudah di-hash
                'role' => 'admin'
            ]
        );
    }
}
