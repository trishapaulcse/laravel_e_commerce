<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = [
            'company_name' => Setting::get('company_name'),
            'company_email' => Setting::get('company_email'),
            'company_phone' => Setting::get('company_phone'),
            'company_address' => Setting::get('company_address'),
            'facebook_url' => Setting::get('facebook_url'),
            'twitter_url' => Setting::get('twitter_url'),
            'instagram_url' => Setting::get('instagram_url'),
            'smtp_host' => Setting::get('smtp_host'),
            'smtp_port' => Setting::get('smtp_port'),
            'smtp_username' => Setting::get('smtp_username'),
            'sms_api_key' => Setting::get('sms_api_key'),
            'vat_percentage' => Setting::get('vat_percentage', 0),
            'inside_shipping_cost' => Setting::get('inside_shipping_cost', 50),
            'outside_shipping_cost' => Setting::get('outside_shipping_cost', 100),
            'payment_bkash_active' => Setting::get('payment_bkash_active', 1),
            'payment_nagad_active' => Setting::get('payment_nagad_active', 1),
            'payment_cod_active' => Setting::get('payment_cod_active', 1),
            'bkash_app_key' => Setting::get('bkash_app_key'),
            'bkash_app_secret' => Setting::get('bkash_app_secret'),
            'bkash_username' => Setting::get('bkash_username'),
            'bkash_password' => Setting::get('bkash_password'),
            'bkash_sandbox' => Setting::get('bkash_sandbox', 1),
            'nagad_merchant_id' => Setting::get('nagad_merchant_id'),
            'nagad_merchant_number' => Setting::get('nagad_merchant_number'),
            'nagad_public_key' => Setting::get('nagad_public_key'),
            'nagad_private_key' => Setting::get('nagad_private_key'),
            'nagad_sandbox' => Setting::get('nagad_sandbox', 1),
        ];
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        // Handle payment method checkboxes (unchecked = 0, checked = 1)
        Setting::set('payment_bkash_active', $request->has('payment_bkash_active') ? 1 : 0);
        Setting::set('payment_nagad_active', $request->has('payment_nagad_active') ? 1 : 0);
        Setting::set('payment_cod_active', $request->has('payment_cod_active') ? 1 : 0);
        Setting::set('bkash_sandbox', $request->has('bkash_sandbox') ? 1 : 0);
        Setting::set('nagad_sandbox', $request->has('nagad_sandbox') ? 1 : 0);
        
        // Handle other settings
        foreach ($request->except('_token', 'payment_bkash_active', 'payment_nagad_active', 'payment_cod_active', 'bkash_sandbox', 'nagad_sandbox') as $key => $value) {
            Setting::set($key, $value);
        }

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully');
    }
}
