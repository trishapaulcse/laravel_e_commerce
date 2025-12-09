@extends('admin.layouts.app')
@section('title', 'Coupon Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.coupons.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $coupon->code }}</h1>
        <a href="{{ route('admin.coupons.edit', $coupon->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-3"><span class="font-semibold">Type:</span> {{ $coupon->type }}</div>
        <div class="mb-3"><span class="font-semibold">Discount Type:</span> {{ $coupon->discount_type }}</div>
        <div class="mb-3"><span class="font-semibold">Value:</span> {{ $coupon->value }}{{ $coupon->discount_type == 'percentage' ? '%' : '৳' }}</div>
        <div class="mb-3"><span class="font-semibold">Min Order:</span> ৳{{ number_format($coupon->min_order_amount ?? 0, 2) }}</div>
        <div class="mb-3"><span class="font-semibold">Max Discount:</span> ৳{{ number_format($coupon->max_discount ?? 0, 2) }}</div>
        <div class="mb-3"><span class="font-semibold">Usage Per User:</span> {{ $coupon->usage_per_user }}</div>
        <div class="mb-3"><span class="font-semibold">Total Usage:</span> {{ $coupon->total_usage ?? 'Unlimited' }}</div>
        <div class="mb-3"><span class="font-semibold">Start Date:</span> {{ $coupon->start_date ? \Carbon\Carbon::parse($coupon->start_date)->format('M d, Y') : 'N/A' }}</div>
        <div class="mb-3"><span class="font-semibold">End Date:</span> {{ $coupon->end_date ? \Carbon\Carbon::parse($coupon->end_date)->format('M d, Y') : 'N/A' }}</div>
        <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $coupon->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $coupon->status }}</span></div>
    </div>
</div>
@endsection
