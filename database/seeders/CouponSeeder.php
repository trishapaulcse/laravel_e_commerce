<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    public function run(): void
    {
        Coupon::create([
            'code' => 'WELCOME10',
            'type' => 'cart',
            'discount_type' => 'percentage',
            'value' => 10,
            'min_order_amount' => 500,
            'usage_per_user' => 1,
            'start_date' => now(),
            'end_date' => now()->addMonths(3),
            'status' => 'active'
        ]);

        Coupon::create([
            'code' => 'BOOK50',
            'type' => 'cart',
            'discount_type' => 'fixed',
            'value' => 50,
            'min_order_amount' => 1000,
            'usage_per_user' => 5,
            'start_date' => now(),
            'end_date' => now()->addMonths(6),
            'status' => 'active'
        ]);
    }
}
