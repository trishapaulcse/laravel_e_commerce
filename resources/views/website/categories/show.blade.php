@extends('website.layouts.app')
@section('title', $category->name)
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">{{ $category->name }}</h1>
    <p class="text-gray-600 mb-8">{{ $category->description }}</p>
    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @forelse($products as $product)
        <div class="bg-white rounded-lg shadow hover:shadow-xl transition">
            <img src="{{ $product->image ?? 'https://via.placeholder.com/300x400' }}" alt="{{ $product->title }}" class="w-full h-64 object-cover rounded-t-lg">
            <div class="p-4">
                <h3 class="font-semibold mb-2 truncate">{{ $product->title }}</h3>
                <p class="text-gray-600 text-sm mb-3">{{ $product->brand->name ?? 'Unknown' }}</p>
                <div class="flex justify-between items-center">
                    <span class="text-xl font-bold text-indigo-600">৳{{ number_format($product->price, 2) }}</span>
                    <a href="{{ route('website.products.show', $product->slug) }}" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                        <i class="fas fa-eye"></i>
                    </a>
                </div>
            </div>
        </div>
        @empty
        <p class="col-span-4 text-center text-gray-500">No products in this category</p>
        @endforelse
    </div>
    
    <div class="mt-8">
        {{ $products->links() }}
    </div>
</div>
@endsection
