<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Discount;

class DiscountSeeder extends Seeder
{
    public function run(): void
    {
        Discount::create([
            'name' => 'Fiction Books Discount',
            'type' => 'percentage',
            'value' => 15,
            'applies_to' => 'category',
            'start_date' => now(),
            'end_date' => now()->addMonths(2),
            'status' => 'active'
        ]);
    }
}
