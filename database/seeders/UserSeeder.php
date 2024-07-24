<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Manager',
            'role_id' => 1,
            'email' => 'manager@gmail.com',
            'password' => Hash::make('manager'),
        ]);

        User::create([
            'name' => 'Client',
            'role_id' => 2,
            'email' => 'client@gmail.com',
            'password' => Hash::make('client'),
        ]);
    }
}
