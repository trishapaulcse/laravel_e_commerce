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
        
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save Settings</button>
    </form>
</div>
@endsection
