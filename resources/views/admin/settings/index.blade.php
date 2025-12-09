@extends('admin.layouts.app')
@section('title', 'Website Settings')
@section('content')
<h1 class="text-3xl font-bold mb-6">Website Settings</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.settings.update') }}" method="POST">
        @csrf
        <h2 class="text-xl font-bold mb-4">Company Information</h2>
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block mb-2">Company Name</label>
                <input type="text" name="company_name" value="{{ $settings['company_name'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Company Email</label>
                <input type="email" name="company_email" value="{{ $settings['company_email'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Company Phone</label>
                <input type="text" name="company_phone" value="{{ $settings['company_phone'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Company Address</label>
                <input type="text" name="company_address" value="{{ $settings['company_address'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
        </div>
        
        <h2 class="text-xl font-bold mb-4">Social Media</h2>
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div>
                <label class="block mb-2">Facebook URL</label>
                <input type="url" name="facebook_url" value="{{ $settings['facebook_url'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Twitter URL</label>
                <input type="url" name="twitter_url" value="{{ $settings['twitter_url'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Instagram URL</label>
                <input type="url" name="instagram_url" value="{{ $settings['instagram_url'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
        </div>
        
        <h2 class="text-xl font-bold mb-4">Email Configuration</h2>
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div>
                <label class="block mb-2">SMTP Host</label>
                <input type="text" name="smtp_host" value="{{ $settings['smtp_host'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">SMTP Port</label>
                <input type="text" name="smtp_port" value="{{ $settings['smtp_port'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">SMTP Username</label>
                <input type="text" name="smtp_username" value="{{ $settings['smtp_username'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
        </div>
        
        <h2 class="text-xl font-bold mb-4">SMS Configuration</h2>
        <div class="mb-6">
            <label class="block mb-2">SMS API Key</label>
            <input type="text" name="sms_api_key" value="{{ $settings['sms_api_key'] ?? '' }}" class="w-full border p-2 rounded">
        </div>
        
        <h2 class="text-xl font-bold mb-4">Tax & Shipping</h2>
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div>
                <label class="block mb-2">VAT Percentage (%)</label>
                <input type="number" name="vat_percentage" value="{{ $settings['vat_percentage'] ?? 0 }}" step="0.01" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Inside Dhaka Shipping (৳)</label>
                <input type="number" name="inside_shipping_cost" value="{{ $settings['inside_shipping_cost'] ?? 50 }}" step="0.01" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Outside Dhaka Shipping (৳)</label>
                <input type="number" name="outside_shipping_cost" value="{{ $settings['outside_shipping_cost'] ?? 100 }}" step="0.01" class="w-full border p-2 rounded">
            </div>
        </div>
        <p class="text-sm text-gray-600 mb-6">Note: City-specific shipping costs can be managed in <a href="{{ route('admin.cities.index') }}" class="text-blue-600 hover:underline">Cities & Shipping</a> section.</p>
        
        <h2 class="text-xl font-bold mb-4">Payment Methods</h2>
        <div class="grid grid-cols-3 gap-4 mb-6">
            <div class="border p-4 rounded">
                <label class="flex items-center mb-2">
                    <input type="checkbox" name="payment_bkash_active" value="1" {{ ($settings['payment_bkash_active'] ?? 1) ? 'checked' : '' }} class="mr-2">
                    <span class="font-semibold text-pink-600">bKash</span>
                </label>
                <p class="text-xs text-gray-500">Enable/disable bKash payment</p>
            </div>
            <div class="border p-4 rounded">
                <label class="flex items-center mb-2">
                    <input type="checkbox" name="payment_nagad_active" value="1" {{ ($settings['payment_nagad_active'] ?? 1) ? 'checked' : '' }} class="mr-2">
                    <span class="font-semibold text-orange-600">Nagad</span>
                </label>
                <p class="text-xs text-gray-500">Enable/disable Nagad payment</p>
            </div>
            <div class="border p-4 rounded">
                <label class="flex items-center mb-2">
                    <input type="checkbox" name="payment_cod_active" value="1" {{ ($settings['payment_cod_active'] ?? 1) ? 'checked' : '' }} class="mr-2">
                    <span class="font-semibold text-green-600">Cash on Delivery</span>
                </label>
                <p class="text-xs text-gray-500">Enable/disable COD payment</p>
            </div>
        </div>
        
        <h2 class="text-xl font-bold mb-4 text-pink-600">bKash API Configuration</h2>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block mb-2">App Key</label>
                <input type="text" name="bkash_app_key" value="{{ $settings['bkash_app_key'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">App Secret</label>
                <input type="text" name="bkash_app_secret" value="{{ $settings['bkash_app_secret'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Username</label>
                <input type="text" name="bkash_username" value="{{ $settings['bkash_username'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Password</label>
                <input type="password" name="bkash_password" value="{{ $settings['bkash_password'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
        </div>
        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="bkash_sandbox" value="1" {{ ($settings['bkash_sandbox'] ?? 1) ? 'checked' : '' }} class="mr-2">
                <span class="text-sm font-medium">Sandbox Mode (Test Environment)</span>
            </label>
        </div>
        
        <h2 class="text-xl font-bold mb-4 text-orange-600">Nagad API Configuration</h2>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <label class="block mb-2">Merchant ID</label>
                <input type="text" name="nagad_merchant_id" value="{{ $settings['nagad_merchant_id'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Merchant Phone Number</label>
                <input type="text" name="nagad_merchant_number" value="{{ $settings['nagad_merchant_number'] ?? '' }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block mb-2">Public Key</label>
                <textarea name="nagad_public_key" rows="3" class="w-full border p-2 rounded">{{ $settings['nagad_public_key'] ?? '' }}</textarea>
            </div>
            <div>
                <label class="block mb-2">Private Key</label>
                <textarea name="nagad_private_key" rows="3" class="w-full border p-2 rounded">{{ $settings['nagad_private_key'] ?? '' }}</textarea>
            </div>
        </div>
        <div class="mb-6">
            <label class="flex items-center">
                <input type="checkbox" name="nagad_sandbox" value="1" {{ ($settings['nagad_sandbox'] ?? 1) ? 'checked' : '' }} class="mr-2">
                <span class="text-sm font-medium">Sandbox Mode (Test Environment)</span>
            </label>
        </div>
        
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save Settings</button>
    </form>
</div>
@endsection
