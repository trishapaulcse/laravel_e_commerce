<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentGateway;

class PaymentGatewaySeeder extends Seeder
{
    public function run(): void
    {
        PaymentGateway::create([
            'name' => 'bKash',
            'slug' => 'bkash',
            'is_active' => true,
            'is_sandbox' => true
        ]);

        PaymentGateway::create([
            'name' => 'Nagad',
            'slug' => 'nagad',
            'is_active' => true,
            'is_sandbox' => true
        ]);

        PaymentGateway::create([
            'name' => 'Cash on Delivery',
            'slug' => 'cod',
            'is_active' => true,
            'is_sandbox' => false
        ]);
    }
}
