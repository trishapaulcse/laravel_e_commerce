@extends('user-panel.layouts.app')
@section('title', 'Order Tracking')
@section('content')
<div class="mb-6">
    <a href="{{ route('user.orders.show', $order->id) }}" class="text-blue-600 hover:text-blue-800 font-semibold"><i class="fas fa-arrow-left mr-2"></i>Back to Order Details</a>
</div>

<h1 class="text-3xl font-bold text-gray-800 mb-6"><i class="fas fa-shipping-fast mr-2"></i>Order Tracking - #{{ $order->id }}</h1>

<div class="bg-white rounded-xl shadow-lg p-8">
    <div class="relative">
        @forelse($order->trackings()->orderBy('tracked_at', 'asc')->get() as $index => $tracking)
        <div class="flex items-start mb-8 last:mb-0">
            <div class="flex flex-col items-center mr-6">
                <div class="w-12 h-12 rounded-full flex items-center justify-center font-bold text-white shadow-lg
                    {{ $tracking->status == 'delivered' ? 'bg-green-500' : '' }}
                    {{ $tracking->status == 'shipped' ? 'bg-blue-500' : '' }}
                    {{ $tracking->status == 'processing' ? 'bg-yellow-500' : '' }}
                    {{ $tracking->status == 'pending' ? 'bg-gray-400' : '' }}
                    {{ $tracking->status == 'out_for_delivery' ? 'bg-purple-500' : '' }}">
                    <i class="fas fa-{{ $tracking->status == 'delivered' ? 'check' : ($tracking->status == 'shipped' ? 'truck' : ($tracking->status == 'processing' ? 'cog' : 'clock')) }}"></i>
                </div>
                @if(!$loop->last)
                <div class="w-1 h-20 bg-gray-300 my-2"></div>
                @endif
            </div>
            <div class="flex-1 bg-gray-50 rounded-lg p-4 hover:shadow-md transition">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg font-bold text-gray-800">{{ ucfirst(str_replace('_', ' ', $tracking->status)) }}</h3>
                    <span class="text-sm text-gray-500">{{ $tracking->tracked_at->format('d M Y, h:i A') }}</span>
                </div>
                @if($tracking->description)
                <p class="text-gray-700 mb-2">{{ $tracking->description }}</p>
                @endif
                @if($tracking->location)
                <p class="text-sm text-gray-600"><i class="fas fa-map-marker-alt mr-2"></i>{{ $tracking->location }}</p>
                @endif
            </div>
        </div>
        @empty
        <div class="text-center py-12">
            <i class="fas fa-box-open text-6xl text-gray-300 mb-4"></i>
            <h3 class="text-xl font-bold text-gray-700 mb-2">No tracking information yet</h3>
            <p class="text-gray-500">Your order is being processed. Tracking updates will appear here soon.</p>
        </div>
        @endforelse
    </div>
</div>

<div class="mt-6 flex gap-3">
    <a href="{{ route('user.orders.show', $order->id) }}" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-receipt mr-2"></i>View Order Details</a>
    <a href="{{ route('user.orders.index') }}" class="bg-gray-500 text-white px-6 py-3 rounded-lg hover:bg-gray-600 transition font-semibold"><i class="fas fa-list mr-2"></i>All Orders</a>
</div>
@endsection
