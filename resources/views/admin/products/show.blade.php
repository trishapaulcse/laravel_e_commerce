@extends('admin.layouts.app')
@section('title', 'Product Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.products.index') }}" class="text-blue-600">&larr; Back to Products</a>
</div>

<div class="bg-white p-6 rounded shadow mb-6">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $product->title }}</h1>
        <div>
            <a href="{{ route('admin.products.edit', $product->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6">
        <div>
            @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-96 object-cover rounded mb-4">
            @else
            <div class="w-full h-96 bg-gray-200 rounded mb-4 flex items-center justify-center">
                <span class="text-gray-500">No Image</span>
            </div>
            @endif
        </div>
        <div>
            <div class="mb-4">
                <span class="font-semibold">SKU:</span> {{ $product->sku }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Slug:</span> {{ $product->slug }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Category:</span> 
                <a href="{{ route('admin.categories.show', $product->category->id) }}" class="text-blue-600">{{ $product->category->name }}</a>
            </div>
            <div class="mb-4">
                <span class="font-semibold">Brand:</span> {{ $product->brand->name ?? 'N/A' }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Unit:</span> {{ $product->unit->name ?? 'N/A' }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Price:</span> <span class="text-2xl font-bold text-green-600">৳{{ number_format($product->price, 2) }}</span>
            </div>
            <div class="mb-4">
                <span class="font-semibold">Cost Price:</span> ৳{{ number_format($product->cost_price ?? 0, 2) }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Stock:</span> <span class="text-lg {{ $product->stock > 0 ? 'text-green-600' : 'text-red-600' }}">{{ $product->stock }}</span>
            </div>
            <div class="mb-4">
                <span class="font-semibold">Status:</span> 
                <span class="px-3 py-1 rounded {{ $product->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $product->status }}</span>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <h3 class="font-semibold mb-2">Description:</h3>
        <p class="text-gray-700">{{ $product->description ?? 'No description available' }}</p>
    </div>
</div>

@if($product->reviews->count() > 0)
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Customer Reviews ({{ $product->reviews->count() }})</h2>
    @foreach($product->reviews as $review)
    <div class="border-b pb-4 mb-4">
        <div class="flex justify-between items-start">
            <div>
                <span class="font-semibold">{{ $review->user->name }}</span>
                <div class="text-yellow-500">
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= $review->rating)
                        ★
                        @else
                        ☆
                        @endif
                    @endfor
                </div>
            </div>
            <span class="text-sm text-gray-500">{{ $review->created_at->format('M d, Y') }}</span>
        </div>
        <p class="mt-2 text-gray-700">{{ $review->comment }}</p>
    </div>
    @endforeach
</div>
@endif
@endsection
