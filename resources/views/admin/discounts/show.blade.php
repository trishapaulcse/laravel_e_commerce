@extends('admin.layouts.app')
@section('title', 'Discount Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.discounts.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $discount->name }}</h1>
        <a href="{{ route('admin.discounts.edit', $discount->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    <div class="mb-3"><span class="font-semibold">Type:</span> {{ $discount->type }}</div>
    <div class="mb-3"><span class="font-semibold">Value:</span> {{ $discount->value }}{{ $discount->type == 'percentage' ? '%' : '৳' }}</div>
    <div class="mb-3"><span class="font-semibold">Applies To:</span> {{ $discount->applies_to }}</div>
    <div class="mb-3"><span class="font-semibold">Start Date:</span> {{ $discount->start_date ? \Carbon\Carbon::parse($discount->start_date)->format('M d, Y') : 'N/A' }}</div>
    <div class="mb-3"><span class="font-semibold">End Date:</span> {{ $discount->end_date ? \Carbon\Carbon::parse($discount->end_date)->format('M d, Y') : 'N/A' }}</div>
    <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $discount->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $discount->status }}</span></div>
</div>
@endsection
