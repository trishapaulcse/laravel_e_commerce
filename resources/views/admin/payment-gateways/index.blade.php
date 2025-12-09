@extends('admin.layouts.app')
@section('title', 'Payment Gateways')
@section('content')
<h1 class="text-3xl font-bold mb-6">Payment Gateways</h1>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Name</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Mode</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gateways as $gateway)
            <tr class="border-b">
                <td class="p-4">{{ $gateway->name }}</td>
                <td class="p-4">
                    <span class="px-2 py-1 rounded {{ $gateway->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ $gateway->is_active ? 'Active' : 'Inactive' }}
                    </span>
                </td>
                <td class="p-4">{{ $gateway->is_sandbox ? 'Sandbox' : 'Live' }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.payment-gateways.edit', $gateway->id) }}" class="text-blue-600">Configure</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
