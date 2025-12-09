<footer class="bg-gray-900 text-gray-300 mt-16">
    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-white text-xl font-bold mb-4"><i class="fas fa-book-open mr-2"></i>BookStore</h3>
                <p class="text-sm mb-4">Your trusted online bookstore for all genres. Quality books at affordable prices.</p>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-white"><i class="fab fa-facebook text-xl"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-twitter text-xl"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-instagram text-xl"></i></a>
                </div>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('website.home') }}" class="hover:text-white">Home</a></li>
                    <li><a href="{{ route('website.products.index') }}" class="hover:text-white">Products</a></li>
                    <li><a href="{{ route('website.categories.index') }}" class="hover:text-white">Categories</a></li>
                    <li><a href="{{ route('website.blogs.index') }}" class="hover:text-white">Blog</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Customer Service</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('website.contact') }}" class="hover:text-white">Contact Us</a></li>
                    <li><a href="#" class="hover:text-white">Shipping Info</a></li>
                    <li><a href="#" class="hover:text-white">Returns</a></li>
                    <li><a href="#" class="hover:text-white">FAQ</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-semibold mb-4">Newsletter</h4>
                <p class="text-sm mb-4">Subscribe to get special offers and updates</p>
                <form class="flex">
                    <input type="email" placeholder="Your email" class="flex-1 px-3 py-2 rounded-l-lg text-gray-900">
                    <button class="bg-indigo-600 px-4 py-2 rounded-r-lg hover:bg-indigo-700">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="border-t border-gray-800 py-4">
        <div class="container mx-auto px-4 text-center text-sm">
            <p>&copy; {{ date('Y') }} BookStore. All rights reserved.</p>
        </div>
    </div>
</footer>
