<div class="bg-white rounded-lg shadow hover:shadow-xl transition relative">
    <button onclick="addToWishlist({{ $product->id }})" class="absolute top-2 right-2 bg-white rounded-full p-2 shadow hover:bg-red-50 z-10">
        <i class="fas fa-heart text-red-500"></i>
    </button>
    <a href="{{ route('website.products.show', $product->slug) }}">
        <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300x400' }}" alt="{{ $product->title }}" class="w-full h-64 object-cover rounded-t-lg hover:opacity-90 transition">
    </a>
    <div class="p-4">
        <a href="{{ route('website.products.show', $product->slug) }}" class="hover:text-indigo-600">
            <h3 class="font-semibold mb-2 truncate">{{ $product->title }}</h3>
        </a>
        <p class="text-gray-600 text-sm mb-3">{{ $product->brand->name ?? 'Unknown' }}</p>
        @if($product->discount_price)
        <div class="mb-2">
            <span class="text-xl font-bold text-indigo-600">৳{{ number_format($product->discount_price, 2) }}</span>
            <span class="text-sm text-gray-400 line-through ml-2">৳{{ number_format($product->price, 2) }}</span>
        </div>
        @else
        <div class="mb-2">
            <span class="text-xl font-bold text-indigo-600">৳{{ number_format($product->price, 2) }}</span>
        </div>
        @endif
        <div class="flex gap-2">
            <button onclick="addToCart({{ $product->id }}, {{ $product->discount_price ?? $product->price }})" class="flex-1 bg-indigo-600 text-white px-3 py-2 rounded hover:bg-indigo-700 text-sm">
                <i class="fas fa-cart-plus"></i>
            </button>
            <button onclick="buyNow({{ $product->id }}, {{ $product->discount_price ?? $product->price }})" class="flex-1 bg-green-600 text-white px-3 py-2 rounded hover:bg-green-700 text-sm">
                <i class="fas fa-bolt"></i>
            </button>
        </div>
    </div>
</div>
