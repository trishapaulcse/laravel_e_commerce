@extends('website.layouts.app')
@section('title', 'Shopping Cart')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Shopping Cart</h1>

    @if($cartItems->count() > 0)
    <div class="bg-white rounded-lg shadow">
        <table class="w-full">
            <thead class="border-b">
                <tr>
                    <th class="text-left p-4">Product</th>
                    <th class="text-left p-4">Price</th>
                    <th class="text-left p-4">Discount</th>
                    <th class="text-left p-4">Quantity</th>
                    <th class="text-left p-4">Subtotal</th>
                    <th class="text-left p-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $cartItem)
                @php
                    $itemSubtotal = ($cartItem['price'] - $cartItem['discount']) * $cartItem['quantity'];
                @endphp
                <tr class="border-b">
                    <td class="p-4">
                        <div class="flex items-center gap-4">
                            @if($cartItem['item']->image)
                            <img src="{{ asset('storage/' . $cartItem['item']->image) }}" class="w-16 h-16 object-cover rounded">
                            @endif
                            <div>
                                <span class="font-semibold">{{ $cartItem['item']->title ?? $cartItem['item']->name }}</span>
                                @if($cartItem['type'] === 'bundle')
                                <span class="text-xs bg-purple-100 text-purple-600 px-2 py-1 rounded ml-2">Bundle</span>
                                @endif
                            </div>
                        </div>
                    </td>
                    <td class="p-4">৳{{ number_format($cartItem['price'], 2) }}</td>
                    <td class="p-4 text-red-600">-৳{{ number_format($cartItem['discount'], 2) }}</td>
                    <td class="p-4">{{ $cartItem['quantity'] }}</td>
                    <td class="p-4 font-semibold">৳{{ number_format($itemSubtotal, 2) }}</td>
                    <td class="p-4">
                        <form action="{{ route('website.cart.remove', $cartItem['key']) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="p-6 border-t">
            <div class="space-y-2 mb-4">
                <div class="flex justify-between">
                    <span>Subtotal:</span>
                    <span>৳{{ number_format($calculations['subtotal'], 2) }}</span>
                </div>
                @if($calculations['discount'] > 0)
                <div class="flex justify-between text-red-600">
                    <span>Discount:</span>
                    <span>-৳{{ number_format($calculations['discount'], 2) }}</span>
                </div>
                @endif
                @if($calculations['vat'] > 0)
                <div class="flex justify-between">
                    <span>VAT:</span>
                    <span>৳{{ number_format($calculations['vat'], 2) }}</span>
                </div>
                @endif
                <div class="flex justify-between items-center pt-2 border-t">
                    <span class="text-xl font-semibold">Total:</span>
                    <span class="text-3xl font-bold text-green-600">৳{{ number_format($calculations['total'], 2) }}</span>
                </div>
            </div>
            <div class="flex gap-4">
                <a href="{{ route('website.products.index') }}" class="border border-blue-600 text-blue-600 px-6 py-3 rounded-lg font-semibold">Continue Shopping</a>
                <a href="{{ route('website.checkout.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700">Proceed to Checkout</a>
            </div>
        </div>
    </div>
    @else
    <div class="bg-white rounded-lg shadow p-12 text-center">
        <p class="text-xl text-gray-600 mb-6">Your cart is empty</p>
        <a href="{{ route('website.products.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold inline-block">Start Shopping</a>
    </div>
    @endif
</div>
@endsection
