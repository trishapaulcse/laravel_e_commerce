@extends('website.layouts.app')
@section('title', $category->name)
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">{{ $category->name }}</h1>
    <p class="text-gray-600 mb-8">{{ $category->description }}</p>
    
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @forelse($products as $product)
            @include('components.product-card', ['product' => $product])
        @empty
        <p class="col-span-4 text-center text-gray-500">No products in this category</p>
        @endforelse
    </div>
    
    <div class="mt-8">
        {{ $products->links() }}
    </div>
</div>
@endsection
