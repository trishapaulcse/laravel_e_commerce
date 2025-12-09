@extends('website.layouts.app')
@section('title', 'Home - BookStore')
@section('content')

<!-- Hero Section -->
<section class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-20">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h1 class="text-5xl font-bold mb-4">Discover Your Next Great Read</h1>
                <p class="text-xl mb-6">Explore thousands of books across all genres</p>
                <a href="{{ route('website.products.index') }}" class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 inline-block">
                    Shop Now <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            <div class="text-center">
                <i class="fas fa-book-reader text-9xl opacity-80"></i>
            </div>
        </div>
    </div>
</section>

<!-- Featured Categories -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Browse by Category</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @forelse($categories as $category)
            <a href="{{ route('website.categories.show', $category->id) }}" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition text-center">
                <i class="fas fa-book text-4xl text-indigo-600 mb-3"></i>
                <h3 class="font-semibold">{{ $category->name }}</h3>
            </a>
            @empty
            <p class="col-span-4 text-center text-gray-500">No categories available</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Featured Products -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Featured Books</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @forelse($featuredProducts as $product)
            <div class="bg-white rounded-lg shadow hover:shadow-xl transition">
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
            @empty
            <p class="col-span-4 text-center text-gray-500">No featured products available</p>
            @endforelse
        </div>
    </div>
</section>

<!-- New Arrivals -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">New Arrivals</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @forelse($featuredProducts->take(4) as $product)
            <div class="bg-white rounded-lg shadow hover:shadow-xl transition">
                <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300x400' }}" alt="{{ $product->title }}" class="w-full h-64 object-cover rounded-t-lg">
                <div class="p-4">
                    <h3 class="font-semibold mb-2 truncate">{{ $product->title }}</h3>
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
            @empty
            <p class="col-span-4 text-center text-gray-500">No new arrivals</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Special Offers -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="bg-gradient-to-r from-orange-500 to-red-500 rounded-lg p-12 text-white text-center">
            <h2 class="text-4xl font-bold mb-4">Special Offer!</h2>
            <p class="text-xl mb-6">Get up to 50% off on selected books</p>
            <a href="{{ route('website.products.index') }}" class="bg-white text-orange-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 inline-block">
                View Deals
            </a>
        </div>
    </div>
</section>

<!-- Best Sellers -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Best Selling</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @forelse($featuredProducts->take(4) as $product)
            <div class="bg-white rounded-lg shadow hover:shadow-xl transition">
                <div class="relative">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300x400' }}" alt="{{ $product->title }}" class="w-full h-64 object-cover rounded-t-lg">
                    <span class="absolute top-2 left-2 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Hot</span>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold mb-2 truncate">{{ $product->title }}</h3>
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
            @empty
            <p class="col-span-4 text-center text-gray-500">No best sellers</p>
            @endforelse
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-gray-100">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">What Our Customers Say</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-4">"Great selection of books and fast delivery. Highly recommended!"</p>
                <p class="font-semibold">- Ahmed Khan</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-4">"Best online bookstore in Bangladesh. Excellent customer service!"</p>
                <p class="font-semibold">- Fatima Rahman</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-gray-600 mb-4">"Amazing prices and quality books. Will definitely order again!"</p>
                <p class="font-semibold">- Karim Hossain</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Why Choose Us</h2>
        <div class="grid md:grid-cols-4 gap-8">
            <div class="text-center">
                <i class="fas fa-shipping-fast text-5xl text-indigo-600 mb-4"></i>
                <h3 class="font-semibold text-xl mb-2">Fast Delivery</h3>
                <p class="text-gray-600">Quick shipping across Bangladesh</p>
            </div>
            <div class="text-center">
                <i class="fas fa-shield-alt text-5xl text-indigo-600 mb-4"></i>
                <h3 class="font-semibold text-xl mb-2">Secure Payment</h3>
                <p class="text-gray-600">bKash, Nagad & COD available</p>
            </div>
            <div class="text-center">
                <i class="fas fa-undo text-5xl text-indigo-600 mb-4"></i>
                <h3 class="font-semibold text-xl mb-2">Easy Returns</h3>
                <p class="text-gray-600">7-day return policy</p>
            </div>
            <div class="text-center">
                <i class="fas fa-headset text-5xl text-indigo-600 mb-4"></i>
                <h3 class="font-semibold text-xl mb-2">24/7 Support</h3>
                <p class="text-gray-600">Always here to help</p>
            </div>
        </div>
    </div>
</section>

@endsection
