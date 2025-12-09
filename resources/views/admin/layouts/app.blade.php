<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex h-screen">
        <aside class="w-64 bg-gray-900 text-white">
            <div class="p-4">
                <h2 class="text-xl font-bold">Admin Panel</h2>
            </div>
            <nav class="mt-4">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 hover:bg-gray-800">Dashboard</a>
                <a href="{{ route('admin.categories.index') }}" class="block px-4 py-2 hover:bg-gray-800">Categories</a>
                <a href="{{ route('admin.products.index') }}" class="block px-4 py-2 hover:bg-gray-800">Products</a>
                <a href="{{ route('admin.orders.index') }}" class="block px-4 py-2 hover:bg-gray-800">Orders</a>
                <a href="{{ route('admin.coupons.index') }}" class="block px-4 py-2 hover:bg-gray-800">Coupons</a>
                <a href="{{ route('admin.memberships.index') }}" class="block px-4 py-2 hover:bg-gray-800">Memberships</a>
                <a href="{{ route('admin.payment-gateways.index') }}" class="block px-4 py-2 hover:bg-gray-800">Payment Gateways</a>
            </nav>
        </aside>

        <main class="flex-1 overflow-y-auto p-8 bg-gray-100">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>
