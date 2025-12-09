@extends('admin.layouts.app')
@section('title', 'Bundle Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.bundles.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow mb-6">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $bundle->name }}</h1>
        <a href="{{ route('admin.bundles.edit', $bundle->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    @if($bundle->image)
    <img src="{{ asset('storage/' . $bundle->image) }}" class="w-full h-64 object-cover rounded mb-4">
    @endif
    <div class="mb-3"><span class="font-semibold">Description:</span> {{ $bundle->description }}</div>
    <div class="mb-3"><span class="font-semibold">Base Price:</span> ৳{{ number_format($bundle->base_price, 2) }}</div>
    <div class="mb-3"><span class="font-semibold">Discount:</span> {{ $bundle->discount_amount }}{{ $bundle->discount_type == 'percentage' ? '%' : '৳' }}</div>
    <div class="mb-3"><span class="font-semibold">Final Price:</span> <span class="text-2xl font-bold text-green-600">৳{{ number_format($bundle->final_price, 2) }}</span></div>
    <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $bundle->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $bundle->status }}</span></div>
</div>
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Bundle Items</h2>
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-2">Product</th>
                <th class="text-left p-2">Quantity</th>
                <th class="text-left p-2">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bundle->items as $item)
            <tr class="border-b">
                <td class="p-2">{{ $item->title }}</td>
                <td class="p-2">{{ $item->pivot->quantity }}</td>
                <td class="p-2">৳{{ number_format($item->price, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
