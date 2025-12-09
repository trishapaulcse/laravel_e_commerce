@extends('website.layouts.app')
@section('title', 'Products')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">All Products</h1>
    
    <div class="mb-6">
        <form action="{{ route('website.products.index') }}" method="GET" class="flex gap-4">
            <input type="text" name="search" placeholder="Search products..." value="{{ request('search') }}" class="flex-1 border p-2 rounded">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded">Search</button>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
        <div class="border rounded-lg overflow-hidden hover:shadow-lg transition">
            @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-48 object-cover">
            @else
            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">No Image</div>
            @endif
            <div class="p-4">
                <h3 class="font-semibold mb-2">{{ $product->title }}</h3>
                <p class="text-gray-600 text-sm mb-2">{{ Str::limit($product->description, 60) }}</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-green-600">৳{{ number_format($product->price, 2) }}</span>
                    <a href="{{ route('website.products.show', $product->slug) }}" class="bg-blue-600 text-white px-4 py-2 rounded text-sm">View</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="mt-8">
        {{ $products->links() }}
    </div>
</div>
@endsection
