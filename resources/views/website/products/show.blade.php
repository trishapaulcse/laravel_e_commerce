@extends('website.layouts.app')
@section('title', $product->title)
@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <div>
            @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-96 object-cover rounded-lg">
            @else
            <div class="w-full h-96 bg-gray-200 rounded-lg flex items-center justify-center">No Image</div>
            @endif
        </div>
        <div>
            <h1 class="text-3xl font-bold mb-4">{{ $product->title }}</h1>
            <p class="text-gray-600 mb-4">{{ $product->description }}</p>
            <div class="mb-4">
                <span class="text-sm text-gray-500">Category:</span>
                <span class="font-semibold">{{ $product->category->name }}</span>
            </div>
            @if($product->brand)
            <div class="mb-4">
                <span class="text-sm text-gray-500">Brand:</span>
                <span class="font-semibold">{{ $product->brand->name }}</span>
            </div>
            @endif
            <div class="mb-4">
                <span class="text-sm text-gray-500">SKU:</span>
                <span class="font-semibold">{{ $product->sku }}</span>
            </div>
            <div class="mb-4">
                <span class="text-sm text-gray-500">Stock:</span>
                <span class="font-semibold {{ $product->stock > 0 ? 'text-green-600' : 'text-red-600' }}">{{ $product->stock > 0 ? 'In Stock' : 'Out of Stock' }}</span>
            </div>
            <div class="mb-6">
                <span class="text-4xl font-bold text-green-600">৳{{ number_format($product->price, 2) }}</span>
            </div>
            <div class="flex gap-4 items-center">
                <input type="number" id="quantity" value="1" min="1" max="{{ $product->stock }}" class="border p-2 rounded w-20">
                <button onclick="addToCart({{ $product->id }}, {{ $product->price }})" class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700" {{ $product->stock == 0 ? 'disabled' : '' }}>
                    <i class="fas fa-shopping-cart mr-2"></i>Add to Cart
                </button>
                <button onclick="buyNow({{ $product->id }}, {{ $product->price }})" class="bg-green-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-700" {{ $product->stock == 0 ? 'disabled' : '' }}>
                    <i class="fas fa-bolt mr-2"></i>Buy Now
                </button>
            </div>
        </div>
    </div>

    @if($relatedProducts->count() > 0)
    <div>
        <h2 class="text-2xl font-bold mb-6">Related Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach($relatedProducts as $related)
            <div class="border rounded-lg overflow-hidden hover:shadow-lg transition">
                @if($related->image)
                <img src="{{ asset('storage/' . $related->image) }}" class="w-full h-48 object-cover">
                @else
                <div class="w-full h-48 bg-gray-200"></div>
                @endif
                <div class="p-4">
                    <h3 class="font-semibold mb-2">{{ $related->title }}</h3>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-green-600">৳{{ number_format($related->price, 2) }}</span>
                        <a href="{{ route('website.products.show', $related->slug) }}" class="text-blue-600">View</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif
</div>
@endsection
