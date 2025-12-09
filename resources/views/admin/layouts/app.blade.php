<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gradient-to-b from-indigo-900 to-indigo-800 text-white flex-shrink-0">
            <div class="p-6 border-b border-indigo-700">
                <h2 class="text-2xl font-bold flex items-center">
                    <i class="fas fa-store mr-2"></i> Admin Panel
                </h2>
            </div>
            <nav class="mt-6 px-3 overflow-y-auto h-[calc(100vh-120px)]">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition {{ request()->routeIs('admin.dashboard') ? 'bg-indigo-700' : '' }}">
                    <i class="fas fa-home w-5"></i><span class="ml-3">Dashboard</span>
                </a>
                <div class="mt-4">
                    <p class="px-4 text-xs font-semibold text-indigo-300 uppercase">Products</p>
                    <a href="{{ route('admin.categories.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-folder w-5"></i><span class="ml-3">Categories</span></a>
                    <a href="{{ route('admin.brands.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-tag w-5"></i><span class="ml-3">Brands</span></a>
                    <a href="{{ route('admin.products.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-box w-5"></i><span class="ml-3">Products</span></a>
                    <a href="{{ route('admin.bundles.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-boxes w-5"></i><span class="ml-3">Bundles</span></a>
                </div>
                <div class="mt-4">
                    <p class="px-4 text-xs font-semibold text-indigo-300 uppercase">Sales</p>
                    <a href="{{ route('admin.orders.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-shopping-cart w-5"></i><span class="ml-3">Orders</span></a>
                    <a href="{{ route('admin.customers.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-users w-5"></i><span class="ml-3">Customers</span></a>
                </div>
                <div class="mt-4">
                    <p class="px-4 text-xs font-semibold text-indigo-300 uppercase">Marketing</p>
                    <a href="{{ route('admin.coupons.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-ticket-alt w-5"></i><span class="ml-3">Coupons</span></a>
                    <a href="{{ route('admin.discounts.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-percent w-5"></i><span class="ml-3">Discounts</span></a>
                    <a href="{{ route('admin.banners.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-image w-5"></i><span class="ml-3">Banners</span></a>
                </div>
                <div class="mt-4">
                    <p class="px-4 text-xs font-semibold text-indigo-300 uppercase">CMS</p>
                    <a href="{{ route('admin.pages.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-file-alt w-5"></i><span class="ml-3">Pages</span></a>
                    <a href="{{ route('admin.blogs.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-blog w-5"></i><span class="ml-3">Blogs</span></a>
                </div>
                <div class="mt-4">
                    <p class="px-4 text-xs font-semibold text-indigo-300 uppercase">Settings</p>
                    <a href="{{ route('admin.settings.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-cog w-5"></i><span class="ml-3">Settings</span></a>
                    <a href="{{ route('admin.roles.index') }}" class="flex items-center px-4 py-3 mb-2 rounded-lg hover:bg-indigo-700 transition"><i class="fas fa-user-shield w-5"></i><span class="ml-3">Roles</span></a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm z-10">
                <div class="flex items-center justify-between px-6 py-4">
                    <h1 class="text-2xl font-semibold text-gray-800">@yield('title', 'Dashboard')</h1>
                    <div class="flex items-center space-x-4">
                        <a href="{{ url('/') }}" class="text-gray-600 hover:text-gray-900"><i class="fas fa-globe"></i> View Site</a>
                        <div class="relative">
                            <button class="flex items-center space-x-2 text-gray-700 hover:text-gray-900">
                                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" class="w-8 h-8 rounded-full">
                                <span>{{ auth()->user()->name }}</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-red-600 hover:text-red-800"><i class="fas fa-sign-out-alt"></i> Logout</button>
                        </form>
                    </div>
                </div>
            </header>

            <!-- Content Area -->
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
