<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create users
        User::create([
            'name' => 'John4 Doe',
            'email' => 'rohnn@gmail.com',
            'password' => Hash::make('password123'),
            'role' => 'user',
            'gender' => 'male',
            'birth_date' => '1990-01-01',
            'weight' => 70.00,
            'height' => 175.00,
            'fitness_goal' => 'Lose weight',
            'health_conditions' => 'None',
        ]);

        // Create trainers
        User::create([
            'name' => 'Trainer A',
            'email' => 'trainerA@example.com',
            'password' => Hash::make('password123'),
            'role' => 'trainer',
            'gender' => 'male',
            'birth_date' => '1980-03-15',
            'weight' => 80.00,
            'height' => 180.00,
            'fitness_goal' => 'Help others lose weight',
            'health_conditions' => 'None',
        ]);

        User::create([
            'name' => 'Trainer B',
            'email' => 'trainerB@example.com',
            'password' => Hash::make('password123'),
            'role' => 'trainer',
            'gender' => 'female',
            'birth_date' => '1992-07-22',
            'weight' => 65.00,
            'height' => 170.00,
            'fitness_goal' => 'Help others build muscle',
            'health_conditions' => 'None',
        ]);

        User::create([
            'name' => 'Trainer C',
            'email' => 'trainerC@example.com',
            'password' => Hash::make('password123'),
            'role' => 'trainer',
            'gender' => 'male',
            'birth_date' => '1983-09-10',
            'weight' => 85.00,
            'height' => 178.00,
            'fitness_goal' => 'Help others improve cardiovascular health',
            'health_conditions' => 'None',
        ]);

        User::create([
            'name' => 'Trainer D',
            'email' => 'trainerD@example.com',
            'password' => Hash::make('password123'),
            'role' => 'trainer',
            'gender' => 'female',
            'birth_date' => '1990-04-17',
            'weight' => 55.00,
            'height' => 160.00,
            'fitness_goal' => 'Help others with flexibility and yoga',
            'health_conditions' => 'None',
        ]);

        User::create([
            'name' => 'Trainer E',
            'email' => 'trainerE@example.com',
            'password' => Hash::make('password123'),
            'role' => 'trainer',
            'gender' => 'male',
            'birth_date' => '1987-02-25',
            'weight' => 92.00,
            'height' => 185.00,
            'fitness_goal' => 'Help others build strength and muscle',
            'health_conditions' => 'None',
        ]);
    }
}
