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

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @foreach($products as $product)
            @include('components.product-card', ['product' => $product])
        @endforeach
    </div>

    <div class="mt-8">
        {{ $products->links() }}
    </div>
</div>
@endsection
