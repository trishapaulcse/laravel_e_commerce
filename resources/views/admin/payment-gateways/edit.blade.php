@extends('admin.layouts.app')
@section('title', 'Configure Payment Gateway')
@section('content')
<h1 class="text-3xl font-bold mb-6">Configure {{ $gateway->name }}</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.payment-gateways.update', $gateway->id) }}" method="POST">
        @csrf @method('PUT')
        
        @if($gateway->slug != 'cod')
        <div class="mb-4">
            <label class="block mb-2">API Key</label>
            <input type="text" name="api_key" value="{{ $gateway->api_key }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2">API Secret</label>
            <input type="password" name="api_secret" value="{{ $gateway->api_secret }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2">Merchant ID</label>
            <input type="text" name="merchant_id" value="{{ $gateway->merchant_id }}" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="is_sandbox" value="1" {{ $gateway->is_sandbox ? 'checked' : '' }} class="mr-2">
                Sandbox Mode (Test)
            </label>
        </div>
        @endif
        
        <div class="mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="is_active" value="1" {{ $gateway->is_active ? 'checked' : '' }} class="mr-2">
                Active
            </label>
        </div>
        
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save Configuration</button>
    </form>
</div>
@endsection
