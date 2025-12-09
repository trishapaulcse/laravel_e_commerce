@extends('admin.layouts.app')
@section('title', 'Membership Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.memberships.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $membership->name }}</h1>
        <a href="{{ route('admin.memberships.edit', $membership->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-3"><span class="font-semibold">Price:</span> ৳{{ number_format($membership->price, 2) }}</div>
        <div class="mb-3"><span class="font-semibold">Duration:</span> {{ $membership->duration_days }} days</div>
        <div class="mb-3"><span class="font-semibold">Free Delivery:</span> {{ $membership->free_delivery ? 'Yes' : 'No' }}</div>
        <div class="mb-3"><span class="font-semibold">Extra Discount:</span> {{ $membership->extra_discount }}%</div>
        <div class="mb-3"><span class="font-semibold">Early Access:</span> {{ $membership->early_access ? 'Yes' : 'No' }}</div>
        <div class="mb-3"><span class="font-semibold">Cashback:</span> {{ $membership->cashback_percentage }}%</div>
        <div class="mb-3"><span class="font-semibold">Priority Support:</span> {{ $membership->priority_support ? 'Yes' : 'No' }}</div>
        <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $membership->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $membership->status }}</span></div>
    </div>
</div>
@endsection
