@extends('admin.layouts.app')
@section('title', 'Product Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.products.index') }}" class="text-blue-600">&larr; Back to Products</a>
</div>

<div class="bg-white p-6 rounded shadow mb-6">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $product->title }}</h1>
        <div>
            <a href="{{ route('admin.products.edit', $product->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6">
        <div>
            @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" class="w-full h-96 object-cover rounded mb-4">
            @else
            <div class="w-full h-96 bg-gray-200 rounded mb-4 flex items-center justify-center">
                <span class="text-gray-500">No Image</span>
            </div>
            @endif
        </div>
        <div>
            <div class="mb-4">
                <span class="font-semibold">SKU:</span> {{ $product->sku }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Slug:</span> {{ $product->slug }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Category:</span> 
                <a href="{{ route('admin.categories.show', $product->category->id) }}" class="text-blue-600">{{ $product->category->name }}</a>
            </div>
            <div class="mb-4">
                <span class="font-semibold">Brand:</span> {{ $product->brand->name ?? 'N/A' }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Unit:</span> {{ $product->unit->name ?? 'N/A' }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Price:</span> <span class="text-2xl font-bold text-green-600">৳{{ number_format($product->price, 2) }}</span>
            </div>
            <div class="mb-4">
                <span class="font-semibold">Cost Price:</span> ৳{{ number_format($product->cost_price ?? 0, 2) }}
            </div>
            <div class="mb-4">
                <span class="font-semibold">Stock:</span> <span class="text-lg {{ $product->stock > 0 ? 'text-green-600' : 'text-red-600' }}">{{ $product->stock }}</span>
            </div>
            <div class="mb-4">
                <span class="font-semibold">Status:</span> 
                <span class="px-3 py-1 rounded {{ $product->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $product->status }}</span>
            </div>
        </div>
    </div>

    <div class="mt-6">
        <h3 class="font-semibold mb-2">Description:</h3>
        <p class="text-gray-700">{{ $product->description ?? 'No description available' }}</p>
    </div>
</div>

<div class="bg-white rounded-xl shadow-lg p-6 mb-6">
    <h2 class="text-xl font-bold text-gray-800 mb-4"><i class="fas fa-shopping-cart mr-2"></i>Order History ({{ $product->orderItems->count() }} orders)</h2>
    @if($product->orderItems->count() > 0)
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
                <tr>
                    <th class="text-left p-4 font-semibold">Order #</th>
                    <th class="text-left p-4 font-semibold">Customer</th>
                    <th class="text-left p-4 font-semibold">Date</th>
                    <th class="text-left p-4 font-semibold">Quantity</th>
                    <th class="text-left p-4 font-semibold">Price</th>
                    <th class="text-left p-4 font-semibold">Total</th>
                    <th class="text-left p-4 font-semibold">Status</th>
                    <th class="text-left p-4 font-semibold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product->orderItems as $item)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="p-4"><span class="font-bold text-gray-800">#{{ $item->order->id }}</span></td>
                    <td class="p-4"><span class="text-gray-700">{{ $item->order->user->name }}</span></td>
                    <td class="p-4"><span class="text-gray-600">{{ $item->order->created_at->format('M d, Y') }}</span></td>
                    <td class="p-4"><span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full font-semibold">{{ $item->quantity }}</span></td>
                    <td class="p-4"><span class="font-semibold text-gray-800">৳{{ number_format($item->price, 2) }}</span></td>
                    <td class="p-4"><span class="font-bold text-green-600">৳{{ number_format($item->price * $item->quantity, 2) }}</span></td>
                    <td class="p-4">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold
                            {{ $item->order->status == 'delivered' ? 'bg-green-100 text-green-700' : '' }}
                            {{ $item->order->status == 'shipped' ? 'bg-blue-100 text-blue-700' : '' }}
                            {{ $item->order->status == 'processing' ? 'bg-yellow-100 text-yellow-700' : '' }}
                            {{ $item->order->status == 'pending' ? 'bg-gray-100 text-gray-700' : '' }}">
                            {{ ucfirst($item->order->status) }}
                        </span>
                    </td>
                    <td class="p-4">
                        <a href="{{ route('admin.orders.show', $item->order->id) }}" class="text-indigo-600 hover:text-indigo-800"><i class="fas fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="bg-gray-50">
                <tr>
                    <td colspan="3" class="p-4 text-right font-bold text-gray-800">Total Sold:</td>
                    <td class="p-4"><span class="px-3 py-1 bg-indigo-600 text-white rounded-full font-bold">{{ $product->orderItems->sum('quantity') }}</span></td>
                    <td colspan="4" class="p-4"><span class="font-bold text-green-600 text-lg">৳{{ number_format($product->orderItems->sum(fn($i) => $i->price * $i->quantity), 2) }}</span></td>
                </tr>
            </tfoot>
        </table>
    </div>
    @else
    <div class="text-center py-8 text-gray-500">
        <i class="fas fa-shopping-cart text-4xl mb-3 text-gray-300"></i>
        <p>No orders for this product yet</p>
    </div>
    @endif
</div>

@if($product->reviews->count() > 0)
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Customer Reviews ({{ $product->reviews->count() }})</h2>
    @foreach($product->reviews as $review)
    <div class="border-b pb-4 mb-4">
        <div class="flex justify-between items-start">
            <div>
                <span class="font-semibold">{{ $review->user->name }}</span>
                <div class="text-yellow-500">
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= $review->rating)
                        ★
                        @else
                        ☆
                        @endif
                    @endfor
                </div>
            </div>
            <span class="text-sm text-gray-500">{{ $review->created_at->format('M d, Y') }}</span>
        </div>
        <p class="mt-2 text-gray-700">{{ $review->comment }}</p>
    </div>
    @endforeach
</div>
@endif
@endsection
