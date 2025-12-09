@extends('user-panel.layouts.app')
@section('title', 'Dashboard')
@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-blue-100 text-sm">Total Orders</p>
                <h3 class="text-3xl font-bold mt-2">{{ auth()->user()->orders()->count() }}</h3>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-shopping-bag text-2xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-br from-yellow-500 to-yellow-600 rounded-xl shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-yellow-100 text-sm">Pending Orders</p>
                <h3 class="text-3xl font-bold mt-2">{{ auth()->user()->orders()->where('status', 'pending')->count() }}</h3>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-clock text-2xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-br from-pink-500 to-pink-600 rounded-xl shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-pink-100 text-sm">Wishlist Items</p>
                <h3 class="text-3xl font-bold mt-2">{{ auth()->user()->wishlists()->count() }}</h3>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-heart text-2xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-green-100 text-sm">Wallet Balance</p>
                <h3 class="text-3xl font-bold mt-2">৳{{ number_format(auth()->user()->wallet_balance ?? 0, 2) }}</h3>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-wallet text-2xl"></i>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-gray-800">Recent Orders</h2>
            <a href="{{ route('user.orders.index') }}" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All <i class="fas fa-arrow-right ml-1"></i></a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 text-left text-sm text-gray-600">
                        <th class="pb-3 font-semibold">Order #</th>
                        <th class="pb-3 font-semibold">Date</th>
                        <th class="pb-3 font-semibold">Total</th>
                        <th class="pb-3 font-semibold">Status</th>
                        <th class="pb-3 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @forelse(auth()->user()->orders()->latest()->limit(5)->get() as $order)
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 font-medium">#{{ $order->id }}</td>
                        <td class="py-4 text-gray-600">{{ $order->created_at->format('d M Y') }}</td>
                        <td class="py-4 font-semibold">৳{{ number_format($order->total ?? 0, 2) }}</td>
                        <td class="py-4"><span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">{{ ucfirst($order->status ?? 'pending') }}</span></td>
                        <td class="py-4 space-x-2">
                            <a href="{{ route('user.orders.show', $order) }}" class="text-blue-600 hover:text-blue-800"><i class="fas fa-eye"></i></a>
                            <a href="{{ route('user.orders.tracking', $order) }}" class="text-green-600 hover:text-green-800"><i class="fas fa-truck"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="py-8 text-center text-gray-500">No orders yet</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="space-y-6">
        <div class="bg-white rounded-xl shadow-lg p-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Quick Links</h3>
            <div class="space-y-3">
                <a href="{{ route('website.products.index') }}" class="flex items-center p-3 bg-blue-50 hover:bg-blue-100 rounded-lg transition">
                    <i class="fas fa-shopping-cart text-blue-600 text-xl mr-3"></i>
                    <span class="font-medium text-gray-700">Continue Shopping</span>
                </a>
                <a href="{{ route('user.wishlist.index') }}" class="flex items-center p-3 bg-pink-50 hover:bg-pink-100 rounded-lg transition">
                    <i class="fas fa-heart text-pink-600 text-xl mr-3"></i>
                    <span class="font-medium text-gray-700">My Wishlist</span>
                </a>
                <a href="{{ route('user.profile') }}" class="flex items-center p-3 bg-purple-50 hover:bg-purple-100 rounded-lg transition">
                    <i class="fas fa-user text-purple-600 text-xl mr-3"></i>
                    <span class="font-medium text-gray-700">Edit Profile</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
