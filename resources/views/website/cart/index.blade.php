@extends('website.layouts.app')
@section('title', 'Shopping Cart')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Shopping Cart</h1>

    @php
        $cart = session()->get('cart', []);
        $total = 0;
    @endphp

    @if(count($cart) > 0)
    <div class="bg-white rounded-lg shadow">
        <table class="w-full">
            <thead class="border-b">
                <tr>
                    <th class="text-left p-4">Product</th>
                    <th class="text-left p-4">Price</th>
                    <th class="text-left p-4">Quantity</th>
                    <th class="text-left p-4">Subtotal</th>
                    <th class="text-left p-4">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                @php
                    $product = \App\Models\Product::find($id);
                    $subtotal = $item['price'] * $item['quantity'];
                    $total += $subtotal;
                @endphp
                <tr class="border-b">
                    <td class="p-4">
                        <div class="flex items-center gap-4">
                            @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" class="w-16 h-16 object-cover rounded">
                            @endif
                            <span class="font-semibold">{{ $product->title }}</span>
                        </div>
                    </td>
                    <td class="p-4">৳{{ number_format($item['price'], 2) }}</td>
                    <td class="p-4">{{ $item['quantity'] }}</td>
                    <td class="p-4 font-semibold">৳{{ number_format($subtotal, 2) }}</td>
                    <td class="p-4">
                        <form action="{{ route('website.cart.remove', $id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="p-6 border-t">
            <div class="flex justify-between items-center mb-4">
                <span class="text-xl font-semibold">Total:</span>
                <span class="text-3xl font-bold text-green-600">৳{{ number_format($total, 2) }}</span>
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
