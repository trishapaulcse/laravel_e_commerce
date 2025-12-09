@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-blue-100 text-sm font-medium">Total Orders</p>
                <h3 class="text-3xl font-bold mt-2">{{ $totalOrders ?? 0 }}</h3>
                <p class="text-blue-100 text-xs mt-2"><i class="fas fa-arrow-up"></i> 12% from last month</p>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-shopping-cart text-3xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-green-100 text-sm font-medium">Total Revenue</p>
                <h3 class="text-3xl font-bold mt-2">৳{{ number_format($totalRevenue ?? 0, 2) }}</h3>
                <p class="text-green-100 text-xs mt-2"><i class="fas fa-arrow-up"></i> 8% from last month</p>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-dollar-sign text-3xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-purple-100 text-sm font-medium">Total Products</p>
                <h3 class="text-3xl font-bold mt-2">{{ $totalProducts ?? 0 }}</h3>
                <p class="text-purple-100 text-xs mt-2"><i class="fas fa-arrow-up"></i> 5 new this week</p>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-box text-3xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-br from-orange-500 to-orange-600 rounded-xl shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-orange-100 text-sm font-medium">Total Customers</p>
                <h3 class="text-3xl font-bold mt-2">{{ $totalUsers ?? 0 }}</h3>
                <p class="text-orange-100 text-xs mt-2"><i class="fas fa-arrow-up"></i> 15 new this week</p>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-users text-3xl"></i>
            </div>
        </div>
    </div>
</div>

<!-- Recent Orders & Quick Actions -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div class="lg:col-span-2 bg-white rounded-xl shadow-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-bold text-gray-800">Recent Orders</h2>
            <a href="{{ route('admin.orders.index') }}" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">View All <i class="fas fa-arrow-right ml-1"></i></a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-gray-200 text-left text-sm text-gray-600">
                        <th class="pb-3 font-semibold">Order ID</th>
                        <th class="pb-3 font-semibold">Customer</th>
                        <th class="pb-3 font-semibold">Amount</th>
                        <th class="pb-3 font-semibold">Status</th>
                        <th class="pb-3 font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @forelse($recentOrders ?? [] as $order)
                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                        <td class="py-4 font-medium text-gray-900">#{{ $order->id }}</td>
                        <td class="py-4 text-gray-600">{{ $order->user->name ?? 'Guest' }}</td>
                        <td class="py-4 font-semibold text-gray-900">৳{{ number_format($order->total ?? 0, 2) }}</td>
                        <td class="py-4"><span class="px-3 py-1 rounded-full text-xs font-medium {{ $order->status == 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">{{ ucfirst($order->status ?? 'pending') }}</span></td>
                        <td class="py-4"><a href="{{ route('admin.orders.show', $order->id) }}" class="text-indigo-600 hover:text-indigo-800"><i class="fas fa-eye"></i></a></td>
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
            <h3 class="text-lg font-bold text-gray-800 mb-4">Quick Actions</h3>
            <div class="space-y-3">
                <a href="{{ route('admin.products.create') }}" class="flex items-center p-3 bg-indigo-50 hover:bg-indigo-100 rounded-lg transition">
                    <i class="fas fa-plus-circle text-indigo-600 text-xl mr-3"></i>
                    <span class="font-medium text-gray-700">Add New Product</span>
                </a>
                <a href="{{ route('admin.orders.index') }}" class="flex items-center p-3 bg-green-50 hover:bg-green-100 rounded-lg transition">
                    <i class="fas fa-shopping-cart text-green-600 text-xl mr-3"></i>
                    <span class="font-medium text-gray-700">View Orders</span>
                </a>
                <a href="{{ route('admin.customers.index') }}" class="flex items-center p-3 bg-purple-50 hover:bg-purple-100 rounded-lg transition">
                    <i class="fas fa-users text-purple-600 text-xl mr-3"></i>
                    <span class="font-medium text-gray-700">Manage Customers</span>
                </a>
                <a href="{{ route('admin.settings.index') }}" class="flex items-center p-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition">
                    <i class="fas fa-cog text-gray-600 text-xl mr-3"></i>
                    <span class="font-medium text-gray-700">Settings</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
