<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'User Panel')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex h-screen">
        <aside class="w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h2 class="text-xl font-bold">User Panel</h2>
            </div>
            <nav class="mt-4">
                <a href="{{ route('user.dashboard') }}" class="block px-4 py-2 hover:bg-gray-700">Dashboard</a>
                <a href="{{ route('user.profile') }}" class="block px-4 py-2 hover:bg-gray-700">Profile</a>
                <a href="{{ route('user.orders.index') }}" class="block px-4 py-2 hover:bg-gray-700">Orders</a>
                <a href="{{ route('user.addresses') }}" class="block px-4 py-2 hover:bg-gray-700">Addresses</a>
                <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-gray-700">Back to Website</a>
            </nav>
        </aside>

        <main class="flex-1 overflow-y-auto p-8">
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
