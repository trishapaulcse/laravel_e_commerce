<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Commerce')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between">
            <a href="{{ route('home') }}" class="text-xl font-bold">E-Commerce</a>
            <div class="space-x-4">
                <a href="{{ route('website.products.index') }}">Products</a>
                <a href="{{ route('website.cart.index') }}">Cart</a>
                @auth
                    <a href="{{ route('user.dashboard') }}">Dashboard</a>
                @else
                    <a href="/login">Login</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto py-8">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2025 E-Commerce Platform. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
