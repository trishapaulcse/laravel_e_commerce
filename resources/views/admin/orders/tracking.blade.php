@extends('admin.layouts.app')
@section('title', 'Order Tracking')
@section('content')
<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-shipping-fast mr-2"></i>Order Tracking - #{{ $order->id }}</h1>
</div>

<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <h2 class="text-xl font-bold text-gray-800 mb-4"><i class="fas fa-plus-circle mr-2"></i>Add Tracking Update</h2>
    <form action="{{ route('admin.orders.tracking.store', $order) }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Status</label>
                <select name="status" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" required>
                    <option value="pending">Pending</option>
                    <option value="processing">Processing</option>
                    <option value="shipped">Shipped</option>
                    <option value="out_for_delivery">Out for Delivery</option>
                    <option value="delivered">Delivered</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Location</label>
                <input type="text" name="location" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Location">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2">Description</label>
                <input type="text" name="description" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" placeholder="Description">
            </div>
            <div class="flex items-end">
                <button type="submit" class="w-full bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-plus mr-2"></i>Add Update</button>
            </div>
        </div>
    </form>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-4">
        <h2 class="text-xl font-bold"><i class="fas fa-history mr-2"></i>Tracking History</h2>
    </div>
    <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-info-circle mr-2"></i>Status</th>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-comment mr-2"></i>Description</th>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-map-marker-alt mr-2"></i>Location</th>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-clock mr-2"></i>Date & Time</th>
            </tr>
        </thead>
        <tbody>
            @forelse($order->trackings()->orderBy('tracked_at', 'desc')->get() as $tracking)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4">
                    <span class="px-3 py-1 rounded-full text-sm font-semibold
                        {{ $tracking->status == 'delivered' ? 'bg-green-100 text-green-700' : '' }}
                        {{ $tracking->status == 'shipped' ? 'bg-blue-100 text-blue-700' : '' }}
                        {{ $tracking->status == 'processing' ? 'bg-yellow-100 text-yellow-700' : '' }}
                        {{ $tracking->status == 'pending' ? 'bg-gray-100 text-gray-700' : '' }}
                        {{ $tracking->status == 'out_for_delivery' ? 'bg-purple-100 text-purple-700' : '' }}">
                        {{ ucfirst(str_replace('_', ' ', $tracking->status)) }}
                    </span>
                </td>
                <td class="p-4"><span class="text-gray-700">{{ $tracking->description }}</span></td>
                <td class="p-4"><span class="text-gray-600">{{ $tracking->location ?? 'N/A' }}</span></td>
                <td class="p-4"><span class="text-sm text-gray-500">{{ $tracking->tracked_at->format('d M Y, h:i A') }}</span></td>
            </tr>
            @empty
            <tr><td colspan="4" class="p-8 text-center text-gray-500"><i class="fas fa-inbox text-4xl mb-2 block"></i>No tracking updates yet</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
