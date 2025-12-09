@extends('user-panel.layouts.app')
@section('title', 'Order Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('user.orders.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold"><i class="fas fa-arrow-left mr-2"></i>Back to Orders</a>
</div>

<h1 class="text-3xl font-bold text-gray-800 mb-6"><i class="fas fa-receipt mr-2"></i>Order #{{ $order->id }}</h1>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4"><i class="fas fa-info-circle mr-2"></i>Order Information</h3>
        <div class="space-y-3">
            <div class="flex justify-between">
                <span class="text-gray-600">Status:</span>
                <span class="px-3 py-1 rounded-full text-xs font-semibold {{ $order->status == 'delivered' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700' }}">{{ ucfirst($order->status ?? 'pending') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Date:</span>
                <span class="font-semibold text-gray-800">{{ $order->created_at->format('d M Y') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Payment:</span>
                <span class="font-semibold text-gray-800">{{ ucfirst($order->payment_method ?? 'N/A') }}</span>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg p-6 text-white">
        <h3 class="text-lg font-bold mb-2"><i class="fas fa-dollar-sign mr-2"></i>Total Amount</h3>
        <p class="text-4xl font-bold">৳{{ number_format($order->total ?? 0, 2) }}</p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4"><i class="fas fa-map-marker-alt mr-2"></i>Shipping Address</h3>
        <p class="text-gray-700">{{ $order->shipping_address ?? 'N/A' }}</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6">
    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-4">
        <h2 class="text-xl font-bold"><i class="fas fa-box mr-2"></i>Order Items</h2>
    </div>
    <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="text-left p-4 font-semibold text-gray-700">Product</th>
                <th class="text-left p-4 font-semibold text-gray-700">Quantity</th>
                <th class="text-left p-4 font-semibold text-gray-700">Price</th>
                <th class="text-left p-4 font-semibold text-gray-700">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4">
                    <div class="flex items-center">
                        <img src="{{ asset($item->product->image ?? 'default.jpg') }}" class="w-16 h-16 object-cover rounded mr-3" alt="{{ $item->product->title }}">
                        <span class="font-medium text-gray-800">{{ $item->product->title }}</span>
                    </div>
                </td>
                <td class="p-4"><span class="text-gray-700">{{ $item->quantity }}</span></td>
                <td class="p-4"><span class="font-semibold text-gray-800">৳{{ number_format($item->price, 2) }}</span></td>
                <td class="p-4"><span class="font-bold text-green-600">৳{{ number_format($item->price * $item->quantity, 2) }}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="flex gap-3 flex-wrap">
    <a href="{{ route('user.orders.tracking', $order->id) }}" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-truck mr-2"></i>Track Order</a>
    <a href="{{ route('user.orders.invoice.download', $order->id) }}" class="bg-gradient-to-r from-green-600 to-green-700 text-white px-6 py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-file-pdf mr-2"></i>Download Invoice</a>
    <form action="{{ route('user.orders.invoice.email', $order->id) }}" method="POST" class="inline">
        @csrf
        <button type="submit" class="bg-gradient-to-r from-purple-600 to-purple-700 text-white px-6 py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-envelope mr-2"></i>Email Invoice</button>
    </form>
    <a href="{{ route('user.orders.index') }}" class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition font-semibold"><i class="fas fa-list mr-2"></i>All Orders</a>
</div>
@endsection
