@extends('admin.layouts.app')
@section('title', 'Order Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.orders.index') }}" class="text-indigo-600 hover:text-indigo-800 font-semibold"><i class="fas fa-arrow-left mr-2"></i>Back to Orders</a>
</div>

<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-receipt mr-2"></i>Order #{{ $order->id }}</h1>
    <div class="flex gap-2">
        <a href="{{ route('admin.orders.tracking', $order->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition"><i class="fas fa-truck mr-2"></i>Tracking</a>
        <a href="{{ route('admin.orders.invoice.download', $order->id) }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition"><i class="fas fa-file-pdf mr-2"></i>Download Invoice</a>
        <form action="{{ route('admin.orders.invoice.email', $order->id) }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition"><i class="fas fa-envelope mr-2"></i>Email Invoice</button>
        </form>
        <button onclick="window.print()" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700 transition"><i class="fas fa-print mr-2"></i>Print</button>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg p-6 text-white">
        <p class="text-blue-100 text-sm mb-2">Order Total</p>
        <h2 class="text-4xl font-bold">৳{{ number_format($order->total ?? 0, 2) }}</h2>
        <p class="text-blue-100 text-sm mt-2">{{ $order->items->count() }} items</p>
    </div>
    
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4"><i class="fas fa-info-circle mr-2"></i>Order Status</h3>
        <form action="{{ route('admin.orders.updateStatus', $order->id) }}" method="POST">
            @csrf @method('PUT')
            <select name="status" onchange="this.form.submit()" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500">
                <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="processing" {{ $order->status == 'processing' ? 'selected' : '' }}>Processing</option>
                <option value="shipped" {{ $order->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
                <option value="out_for_delivery" {{ $order->status == 'out_for_delivery' ? 'selected' : '' }}>Out for Delivery</option>
                <option value="delivered" {{ $order->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
                <option value="cancelled" {{ $order->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </form>
        <div class="mt-4">
            <span class="px-3 py-1 rounded-full text-sm font-semibold
                {{ $order->status == 'delivered' ? 'bg-green-100 text-green-700' : '' }}
                {{ $order->status == 'shipped' ? 'bg-blue-100 text-blue-700' : '' }}
                {{ $order->status == 'processing' ? 'bg-yellow-100 text-yellow-700' : '' }}
                {{ $order->status == 'pending' ? 'bg-gray-100 text-gray-700' : '' }}
                {{ $order->status == 'cancelled' ? 'bg-red-100 text-red-700' : '' }}">
                {{ ucfirst(str_replace('_', ' ', $order->status ?? 'pending')) }}
            </span>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4"><i class="fas fa-credit-card mr-2"></i>Payment</h3>
        <div class="space-y-2">
            <div class="flex justify-between">
                <span class="text-gray-600">Method:</span>
                <span class="font-semibold text-gray-800">{{ ucfirst($order->payment_method ?? 'N/A') }}</span>
            </div>
            <div class="flex justify-between">
                <span class="text-gray-600">Status:</span>
                <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-semibold">Paid</span>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
    <div class="bg-white rounded-xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4"><i class="fas fa-user mr-2"></i>Customer Information</h3>
        <div class="space-y-3">
            <div class="flex items-center">
                <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center mr-3">
                    <i class="fas fa-user text-indigo-600"></i>
                </div>
                <div>
                    <p class="font-semibold text-gray-800">{{ $order->user->name ?? 'Guest' }}</p>
                    <p class="text-sm text-gray-600">{{ $order->user->email ?? 'N/A' }}</p>
                </div>
            </div>
            <div class="pt-3 border-t">
                <p class="text-sm text-gray-600"><i class="fas fa-phone mr-2"></i>{{ $order->user->phone ?? 'N/A' }}</p>
                <p class="text-sm text-gray-600 mt-2"><i class="fas fa-calendar mr-2"></i>Customer since {{ $order->user->created_at->format('M Y') ?? 'N/A' }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6">
        <h3 class="text-lg font-bold text-gray-800 mb-4"><i class="fas fa-shipping-fast mr-2"></i>Shipping Address</h3>
        <div class="bg-gray-50 rounded-lg p-4">
            <p class="text-gray-700">{{ $order->shipping_address ?? 'No shipping address provided' }}</p>
        </div>
        @if($order->billing_address)
        <h3 class="text-lg font-bold text-gray-800 mb-2 mt-4"><i class="fas fa-file-invoice mr-2"></i>Billing Address</h3>
        <div class="bg-gray-50 rounded-lg p-4">
            <p class="text-gray-700">{{ $order->billing_address }}</p>
        </div>
        @endif
    </div>
</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6">
    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-4">
        <h2 class="text-xl font-bold"><i class="fas fa-box mr-2"></i>Order Items</h2>
    </div>
    <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="text-left p-4 font-semibold text-gray-700">Product</th>
                <th class="text-left p-4 font-semibold text-gray-700">SKU</th>
                <th class="text-left p-4 font-semibold text-gray-700">Price</th>
                <th class="text-left p-4 font-semibold text-gray-700">Quantity</th>
                <th class="text-left p-4 font-semibold text-gray-700">Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4">
                    <div class="flex items-center">
                        <img src="{{ asset($item->product->image ?? 'default.jpg') }}" class="w-16 h-16 object-cover rounded mr-3" alt="{{ $item->product->title }}">
                        <div>
                            <p class="font-medium text-gray-800">{{ $item->product->title }}</p>
                            <p class="text-sm text-gray-500">{{ $item->product->category->name ?? 'N/A' }}</p>
                        </div>
                    </div>
                </td>
                <td class="p-4"><span class="text-gray-600 font-mono text-sm">{{ $item->product->sku ?? 'N/A' }}</span></td>
                <td class="p-4"><span class="font-semibold text-gray-800">৳{{ number_format($item->price, 2) }}</span></td>
                <td class="p-4"><span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full font-semibold">{{ $item->quantity }}</span></td>
                <td class="p-4"><span class="font-bold text-green-600">৳{{ number_format($item->price * $item->quantity, 2) }}</span></td>
            </tr>
            @endforeach
        </tbody>
        <tfoot class="bg-gray-50">
            <tr>
                <td colspan="4" class="p-4 text-right font-bold text-gray-800">Subtotal:</td>
                <td class="p-4 font-bold text-gray-800">৳{{ number_format($order->items->sum(fn($i) => $i->price * $i->quantity), 2) }}</td>
            </tr>
            <tr>
                <td colspan="4" class="p-4 text-right font-bold text-gray-800">Shipping:</td>
                <td class="p-4 font-bold text-gray-800">৳50.00</td>
            </tr>
            <tr class="bg-indigo-50">
                <td colspan="4" class="p-4 text-right font-bold text-gray-800 text-lg">Total:</td>
                <td class="p-4 font-bold text-indigo-600 text-lg">৳{{ number_format($order->total ?? 0, 2) }}</td>
            </tr>
        </tfoot>
    </table>
</div>

<div class="bg-white rounded-xl shadow-lg p-6">
    <h3 class="text-lg font-bold text-gray-800 mb-4"><i class="fas fa-clock mr-2"></i>Order Timeline</h3>
    <div class="space-y-3">
        <div class="flex items-center text-sm">
            <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
            <span class="text-gray-600">Order placed:</span>
            <span class="ml-2 font-semibold text-gray-800">{{ $order->created_at->format('M d, Y h:i A') }}</span>
        </div>
        <div class="flex items-center text-sm">
            <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
            <span class="text-gray-600">Last updated:</span>
            <span class="ml-2 font-semibold text-gray-800">{{ $order->updated_at->format('M d, Y h:i A') }}</span>
        </div>
    </div>
</div>
@endsection
