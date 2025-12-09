<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            // Company Information
            ['key' => 'company_name', 'value' => 'E-Commerce Store'],
            ['key' => 'company_email', 'value' => 'info@ecommerce.com'],
            ['key' => 'company_phone', 'value' => '+880 1234567890'],
            ['key' => 'company_address', 'value' => 'Dhaka, Bangladesh'],
            
            // Social Media
            ['key' => 'facebook_url', 'value' => 'https://facebook.com'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com'],
            ['key' => 'instagram_url', 'value' => 'https://instagram.com'],
            
            // Email Configuration
            ['key' => 'smtp_host', 'value' => 'smtp.gmail.com'],
            ['key' => 'smtp_port', 'value' => '587'],
            ['key' => 'smtp_username', 'value' => ''],
            
            // SMS Configuration
            ['key' => 'sms_api_key', 'value' => ''],
            
            // Tax & Shipping
            ['key' => 'vat_percentage', 'value' => '5'],
            ['key' => 'inside_shipping_cost', 'value' => '50'],
            ['key' => 'outside_shipping_cost', 'value' => '100'],
            
            // Payment Methods
            ['key' => 'payment_bkash_active', 'value' => '1'],
            ['key' => 'payment_nagad_active', 'value' => '1'],
            ['key' => 'payment_cod_active', 'value' => '1'],
            
            // bKash API
            ['key' => 'bkash_app_key', 'value' => ''],
            ['key' => 'bkash_app_secret', 'value' => ''],
            ['key' => 'bkash_username', 'value' => ''],
            ['key' => 'bkash_password', 'value' => ''],
            ['key' => 'bkash_sandbox', 'value' => '1'],
            
            // Nagad API
            ['key' => 'nagad_merchant_id', 'value' => ''],
            ['key' => 'nagad_merchant_number', 'value' => ''],
            ['key' => 'nagad_public_key', 'value' => ''],
            ['key' => 'nagad_private_key', 'value' => ''],
            ['key' => 'nagad_sandbox', 'value' => '1'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}
