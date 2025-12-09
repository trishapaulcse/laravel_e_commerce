@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        <img src="{{ $product->image ?? 'https://via.placeholder.com/400x300' }}" class="img-fluid" alt="{{ $product->name }}">
    </div>
    <div class="col-md-6">
        <h1>{{ $product->name }}</h1>
        <p class="h3 text-primary">${{ number_format($product->price, 2) }}</p>
        <p>{{ $product->description }}</p>
        
        @if($product->category)
        <p>Category: {{ $product->category->name }}</p>
        @endif

        <form action="{{ route('website.cart.add') }}" method="POST" class="mt-4">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <button type="submit" class="btn btn-primary btn-lg">Add to Cart</button>
        </form>
    </div>
</div>
@endsection