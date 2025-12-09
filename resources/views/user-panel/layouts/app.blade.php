<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'User Dashboard')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <aside class="w-64 bg-gradient-to-b from-blue-600 to-blue-700 text-white flex-shrink-0">
            <div class="p-6 border-b border-blue-500">
                <h2 class="text-2xl font-bold flex items-center">
                    <i class="fas fa-user-circle mr-2"></i> My Account
                </h2>
            </div>
            <nav class="mt-6 px-3">
                <a href="{{ route('user.dashboard') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-blue-500 transition {{ request()->routeIs('user.dashboard') ? 'bg-blue-500' : '' }}">
                    <i class="fas fa-home w-5"></i><span class="ml-3">Dashboard</span>
                </a>
                <a href="{{ route('user.profile') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-blue-500 transition">
                    <i class="fas fa-user w-5"></i><span class="ml-3">Profile</span>
                </a>
                <a href="{{ route('user.orders.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-blue-500 transition">
                    <i class="fas fa-shopping-bag w-5"></i><span class="ml-3">My Orders</span>
                </a>
                <a href="{{ route('user.wishlist.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-blue-500 transition">
                    <i class="fas fa-heart w-5"></i><span class="ml-3">Wishlist</span>
                </a>
                <a href="{{ route('user.addresses') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-blue-500 transition">
                    <i class="fas fa-map-marker-alt w-5"></i><span class="ml-3">Addresses</span>
                </a>
                <a href="{{ route('user.wallet') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-blue-500 transition">
                    <i class="fas fa-wallet w-5"></i><span class="ml-3">Wallet</span>
                </a>
                <a href="{{ route('user.memberships') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-blue-500 transition">
                    <i class="fas fa-crown w-5"></i><span class="ml-3">Membership</span>
                </a>
                <div class="border-t border-blue-500 mt-4 pt-4">
                    <a href="{{ route('home') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-blue-500 transition">
                        <i class="fas fa-arrow-left w-5"></i><span class="ml-3">Back to Shop</span>
                    </a>
                </div>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between px-6 py-4">
                    <h1 class="text-2xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h1>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" class="w-10 h-10 rounded-full border-2 border-blue-500">
                            <div>
                                <p class="text-sm font-semibold text-gray-800">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500">{{ auth()->user()->email }}</p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-red-600 hover:text-red-800 px-4 py-2 rounded-lg hover:bg-red-50 transition">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto p-6">
                @if(session('success'))
                    <div class="bg-green-50 border-l-4 border-green-500 text-green-700 px-4 py-3 rounded mb-4 flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>{{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="bg-red-50 border-l-4 border-red-500 text-red-700 px-4 py-3 rounded mb-4 flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>{{ session('error') }}
                    </div>
                @endif
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
