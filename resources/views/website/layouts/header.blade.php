<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="bg-indigo-600 text-white py-2">
        <div class="container mx-auto px-4 flex justify-between text-sm">
            <span><i class="fas fa-phone mr-2"></i>+880 1234-567890</span>
            <span><i class="fas fa-envelope mr-2"></i>support@bookstore.com</span>
        </div>
    </div>
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <a href="{{ route('website.home') }}" class="text-2xl font-bold text-indigo-600">
                <i class="fas fa-book-open mr-2"></i>BookStore
            </a>
            <div class="flex-1 mx-8 max-w-2xl">
                <form action="{{ route('website.products.index') }}" class="relative">
                    <input type="text" name="search" placeholder="Search for books..." class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <button type="submit" class="absolute right-2 top-2 text-indigo-600 hover:text-indigo-800">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="flex items-center space-x-6">
                @auth
                <a href="{{ route('user.dashboard') }}" class="hover:text-indigo-600">
                    <i class="fas fa-user mr-1"></i>{{ auth()->user()->name }}
                </a>
                @else
                <a href="{{ route('login') }}" class="hover:text-indigo-600">
                    <i class="fas fa-sign-in-alt mr-1"></i>Login
                </a>
                @endauth
                <a href="{{ route('user.wishlist.index') }}" class="hover:text-indigo-600">
                    <i class="fas fa-heart"></i>
                </a>
                <a href="{{ route('website.cart.index') }}" class="hover:text-indigo-600 relative">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center {{ session('cart') ? '' : 'hidden' }}">{{ session('cart') ? count(session('cart')) : 0 }}</span>
                </a>
            </div>
        </div>
    </div>
    <nav class="bg-gray-100 border-t">
        <div class="container mx-auto px-4">
            <ul class="flex space-x-8 py-3">
                <li><a href="{{ route('website.home') }}" class="hover:text-indigo-600 font-medium">Home</a></li>
                <li><a href="{{ route('website.products.index') }}" class="hover:text-indigo-600 font-medium">Products</a></li>
                <li><a href="{{ route('website.categories.index') }}" class="hover:text-indigo-600 font-medium">Categories</a></li>
                <li><a href="{{ route('website.blogs.index') }}" class="hover:text-indigo-600 font-medium">Blog</a></li>
                <li><a href="{{ route('website.contact') }}" class="hover:text-indigo-600 font-medium">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
