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
            ['key' => 'company_name', 'value' => 'Gordon Strickland Associates'],
            ['key' => 'company_email', 'value' => 'dopibohyw@mailinator.com'],
            ['key' => 'company_phone', 'value' => 'Hays and Cantu Associates'],
            ['key' => 'company_address', 'value' => 'Obrien Fisher Co'],
            
            // Social Media
            ['key' => 'facebook_url', 'value' => 'https://www.daxuxunytobizo.cc'],
            ['key' => 'twitter_url', 'value' => 'https://www.najicogylitemeg.com.au'],
            ['key' => 'instagram_url', 'value' => 'https://www.puvejoliwuvi.co.uk'],
            
            // Email Configuration
            ['key' => 'smtp_host', 'value' => 'Molestiae dolor veli'],
            ['key' => 'smtp_port', 'value' => 'Consectetur eaque e'],
            ['key' => 'smtp_username', 'value' => 'felidaja'],
            
            // SMS Configuration
            ['key' => 'sms_api_key', 'value' => 'In cillum deleniti r'],
            
            // Tax & Shipping
            ['key' => 'vat_percentage', 'value' => '5'],
            ['key' => 'inside_shipping_cost', 'value' => '50'],
            ['key' => 'outside_shipping_cost', 'value' => '100'],
            
            // Payment Methods
            ['key' => 'payment_bkash_active', 'value' => '1'],
            ['key' => 'payment_nagad_active', 'value' => '1'],
            ['key' => 'payment_cod_active', 'value' => '1'],
            
            // bKash API Configuration
            ['key' => 'bkash_app_key', 'value' => ''],
            ['key' => 'bkash_app_secret', 'value' => ''],
            ['key' => 'bkash_username', 'value' => ''],
            ['key' => 'bkash_password', 'value' => ''],
            ['key' => 'bkash_sandbox', 'value' => '1'],
            
            // Nagad API Configuration
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
