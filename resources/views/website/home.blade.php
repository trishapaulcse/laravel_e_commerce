@extends('website.layouts.app')

@section('title', 'Home - E-Commerce')

@section('content')
<div class="mb-8">
    <h1 class="text-4xl font-bold mb-4">Welcome to Our Store</h1>
    <p class="text-gray-600">Discover amazing products at great prices</p>
</div>

<section class="mb-12">
    <h2 class="text-2xl font-bold mb-6">Categories</h2>
    <div class="grid grid-cols-4 gap-6">
        @foreach($categories as $category)
        <div class="bg-white p-6 rounded shadow hover:shadow-lg">
            <h3 class="font-bold">{{ $category->name }}</h3>
        </div>
        @endforeach
    </div>
</section>

<section>
    <h2 class="text-2xl font-bold mb-6">Featured Products</h2>
    <div class="grid grid-cols-4 gap-6">
        @foreach($featuredProducts as $product)
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-bold mb-2">{{ $product->title }}</h3>
            <p class="text-gray-600 mb-2">${{ $product->price }}</p>
            <a href="{{ route('products.show', $product->slug) }}" class="text-blue-600 hover:underline">View Details</a>
        </div>
        @endforeach
    </div>
</section>
@endsection
