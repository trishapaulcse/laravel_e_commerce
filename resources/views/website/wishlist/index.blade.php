@extends('website.layouts.app')
@section('title', 'My Wishlist')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">My Wishlist</h1>
    
    @if($wishlists->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @foreach($wishlists as $wishlist)
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="{{ asset('storage/' . $wishlist->product->image) }}" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="font-semibold text-lg mb-2">{{ $wishlist->product->title }}</h3>
                <p class="text-green-600 font-bold mb-4">৳{{ number_format($wishlist->product->price, 2) }}</p>
                <div class="flex gap-2">
                    <button onclick="addToCart({{ $wishlist->product->id }}, {{ $wishlist->product->price }})" class="flex-1 bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                        Add to Cart
                    </button>
                    <form action="{{ route('website.wishlist.remove', $wishlist->product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="text-center py-12">
        <i class="fas fa-heart text-gray-300 text-6xl mb-4"></i>
        <p class="text-gray-500 text-xl">Your wishlist is empty</p>
        <a href="{{ route('website.products.index') }}" class="inline-block mt-4 bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700">
            Continue Shopping
        </a>
    </div>
    @endif
</div>
@endsection
