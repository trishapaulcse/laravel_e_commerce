@extends('admin.layouts.app')
@section('title', 'Offer Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.offers.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $offer->title }}</h1>
        <a href="{{ route('admin.offers.edit', $offer->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    @if($offer->image)
    <img src="{{ asset('storage/' . $offer->image) }}" class="w-full h-64 object-cover rounded mb-4">
    @endif
    <div class="mb-3"><span class="font-semibold">Description:</span> {{ $offer->description }}</div>
    <div class="mb-3"><span class="font-semibold">Discount:</span> {{ $offer->discount_value }}{{ $offer->discount_type == 'percentage' ? '%' : '৳' }}</div>
    <div class="mb-3"><span class="font-semibold">Start Date:</span> {{ $offer->start_date ? \Carbon\Carbon::parse($offer->start_date)->format('M d, Y') : 'N/A' }}</div>
    <div class="mb-3"><span class="font-semibold">End Date:</span> {{ $offer->end_date ? \Carbon\Carbon::parse($offer->end_date)->format('M d, Y') : 'N/A' }}</div>
    <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $offer->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $offer->status }}</span></div>
</div>
@endsection
