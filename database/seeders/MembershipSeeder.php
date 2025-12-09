<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membership;

class MembershipSeeder extends Seeder
{
    public function run(): void
    {
        Membership::create([
            'name' => 'Silver Reader',
            'price' => 500,
            'duration_days' => 30,
            'free_delivery' => true,
            'extra_discount' => 5,
            'status' => 'active'
        ]);

        Membership::create([
            'name' => 'Gold Reader',
            'price' => 1200,
            'duration_days' => 90,
            'free_delivery' => true,
            'extra_discount' => 10,
            'early_access' => true,
            'status' => 'active'
        ]);

        Membership::create([
            'name' => 'Platinum Reader',
            'price' => 3000,
            'duration_days' => 365,
            'free_delivery' => true,
            'extra_discount' => 15,
            'early_access' => true,
            'cashback_percentage' => 5,
            'priority_support' => true,
            'status' => 'active'
        ]);
    }
}
