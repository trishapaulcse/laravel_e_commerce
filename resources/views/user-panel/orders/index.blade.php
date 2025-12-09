@extends('user-panel.layouts.app')
@section('title', 'My Orders')
@section('content')\
<h1 class="text-3xl font-bold text-gray-800 mb-6"><i class="fas fa-shopping-bag mr-2"></i>My Orders</h1>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-blue-500 to-blue-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-hashtag mr-2"></i>Order #</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-calendar mr-2"></i>Date</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-dollar-sign mr-2"></i>Total</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-info-circle mr-2"></i>Status</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cog mr-2"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-bold text-gray-800">#{{ $order->id }}</span></td>
                <td class="p-4"><span class="text-gray-600">{{ $order->created_at->format('d M Y') }}</span></td>
                <td class="p-4"><span class="font-semibold text-green-600">৳{{ number_format($order->total ?? 0, 2) }}</span></td>
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full text-xs font-semibold
                        {{ $order->status == 'delivered' ? 'bg-green-100 text-green-700' : '' }}
                        {{ $order->status == 'shipped' ? 'bg-blue-100 text-blue-700' : '' }}
                        {{ $order->status == 'processing' ? 'bg-yellow-100 text-yellow-700' : '' }}
                        {{ $order->status == 'pending' ? 'bg-gray-100 text-gray-700' : '' }}">
                        {{ ucfirst($order->status ?? 'pending') }}
                    </span>
                </td>
                <td class="p-4">
                    <a href="{{ route('user.orders.show', $order->id) }}" class="inline-flex items-center px-3 py-1 bg-blue-100 text-blue-700 rounded-lg hover:bg-blue-200 transition mr-2"><i class="fas fa-eye mr-1"></i>View</a>
                    <a href="{{ route('user.orders.tracking', $order->id) }}" class="inline-flex items-center px-3 py-1 bg-green-100 text-green-700 rounded-lg hover:bg-green-200 transition"><i class="fas fa-truck mr-1"></i>Track</a>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="p-12 text-center text-gray-500"><i class="fas fa-shopping-bag text-6xl mb-4 block text-gray-300"></i><p class="text-lg">No orders yet</p><a href="{{ route('website.products.index') }}" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">Start Shopping</a></td></tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-6">{{ $orders->links() }}</div>
@endsection
