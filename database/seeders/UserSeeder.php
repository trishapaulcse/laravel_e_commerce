<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@bookstore.com',
            'password' => Hash::make('password'),
            'phone' => '01712345678',
        ]);
        $admin->roles()->attach(1); // Super Admin

        User::create([
            'name' => 'John Customer',
            'email' => 'customer@example.com',
            'password' => Hash::make('password'),
            'phone' => '01798765432',
        ]);
    }
}
