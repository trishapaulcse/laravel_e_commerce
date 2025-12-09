@extends('user-panel.layouts.app')
@section('title', 'My Wishlist')
@section('content')
<h1 class="text-3xl font-bold text-gray-800 mb-6"><i class="fas fa-heart mr-2 text-pink-600"></i>My Wishlist</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    @forelse($wishlists as $wishlist)
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition group">
        <div class="relative">
            <img src="{{ asset($wishlist->product->image ?? 'default.jpg') }}" class="w-full h-48 object-cover" alt="{{ $wishlist->product->title }}">
            <form action="{{ route('user.wishlist.destroy', $wishlist) }}" method="POST" class="absolute top-2 right-2">
                @csrf @method('DELETE')
                <button type="submit" class="bg-red-500 text-white p-2 rounded-full hover:bg-red-600 transition"><i class="fas fa-times"></i></button>
            </form>
        </div>
        <div class="p-4">
            <h3 class="font-bold text-gray-800 mb-2 line-clamp-2">{{ $wishlist->product->title }}</h3>
            <p class="text-2xl font-bold text-green-600 mb-3">৳{{ number_format($wishlist->product->price ?? 0, 2) }}</p>
            <a href="{{ route('website.products.show', $wishlist->product->slug) }}" class="block w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white text-center py-2 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-eye mr-2"></i>View Product</a>
        </div>
    </div>
    @empty
    <div class="col-span-full bg-white rounded-xl shadow-lg p-12 text-center">
        <i class="fas fa-heart-broken text-6xl text-gray-300 mb-4"></i>
        <h3 class="text-2xl font-bold text-gray-700 mb-2">Your wishlist is empty</h3>
        <p class="text-gray-500 mb-6">Start adding products you love!</p>
        <a href="{{ route('website.products.index') }}" class="inline-block bg-gradient-to-r from-pink-600 to-pink-700 text-white px-8 py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-shopping-bag mr-2"></i>Browse Products</a>
    </div>
    @endforelse
</div>
@endsection
