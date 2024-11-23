<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'Rand@gmail.com'],
            [
                'name' => 'Rand',
                'email' => 'Rand@gmail.com',
                'password' => Hash::make('adminpassword'),
                'role' => 'admin',
            ]
        );
    }
}
