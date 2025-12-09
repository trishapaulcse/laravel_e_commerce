<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\CustomerProfile;
use Illuminate\Database\Seeder;

class CustomerProfileSeeder extends Seeder
{
    public function run(): void
    {
        $customers = User::whereDoesntHave('roles')->get();

        foreach ($customers as $customer) {
            CustomerProfile::create([
                'user_id' => $customer->id,
                'bio' => 'Customer bio for ' . $customer->name,
                'preferred_language' => 'en',
                'preferred_currency' => 'BDT',
                'newsletter_subscribed' => true,
                'sms_notifications' => true,
                'email_notifications' => true,
                'total_orders' => 0,
                'total_spent' => 0,
                'loyalty_points' => 0
            ]);
        }
    }
}
