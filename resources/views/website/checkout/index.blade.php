@extends('website.layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Checkout</h1>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <form action="{{ route('website.checkout.store') }}" method="POST">
                @csrf
                <div class="bg-white rounded-lg shadow p-6 mb-6">
                    <h2 class="text-xl font-bold mb-4">Shipping Address</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div><label class="block mb-2">Full Name</label><input type="text" name="name" required class="w-full border rounded px-3 py-2"></div>
                        <div><label class="block mb-2">Phone</label><input type="text" name="phone" required class="w-full border rounded px-3 py-2"></div>
                        <div class="col-span-2"><label class="block mb-2">Address</label><textarea name="address" required class="w-full border rounded px-3 py-2" rows="3"></textarea></div>
                        <div><label class="block mb-2">City</label><input type="text" name="city" required class="w-full border rounded px-3 py-2"></div>
                        <div><label class="block mb-2">Postal Code</label><input type="text" name="postal_code" class="w-full border rounded px-3 py-2"></div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-xl font-bold mb-4">Payment Method</h2>
                    <div class="space-y-3">
                        <label class="flex items-center p-3 border rounded cursor-pointer hover:bg-gray-50"><input type="radio" name="payment_method" value="bkash" required class="mr-3"><span class="font-semibold">bKash</span></label>
                        <label class="flex items-center p-3 border rounded cursor-pointer hover:bg-gray-50"><input type="radio" name="payment_method" value="nagad" required class="mr-3"><span class="font-semibold">Nagad</span></label>
                        <label class="flex items-center p-3 border rounded cursor-pointer hover:bg-gray-50"><input type="radio" name="payment_method" value="cod" required class="mr-3"><span class="font-semibold">Cash on Delivery</span></label>
                    </div>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg mt-6 font-semibold hover:bg-indigo-700">Place Order</button>
            </form>
        </div>
        <div>
            <div class="bg-white rounded-lg shadow p-6 sticky top-4">
                <h2 class="text-xl font-bold mb-4">Order Summary</h2>
                <div class="space-y-3 mb-4">
                    @foreach($cartItems as $item)
                    <div class="flex justify-between"><span>{{ $item->product->title }} x{{ $item->quantity }}</span><span>৳{{ number_format($item->price * $item->quantity, 2) }}</span></div>
                    @endforeach
                </div>
                <div class="border-t pt-4 space-y-2">
                    <div class="flex justify-between"><span>Subtotal</span><span>৳{{ number_format($subtotal, 2) }}</span></div>
                    <div class="flex justify-between"><span>Shipping</span><span>৳{{ number_format($shipping, 2) }}</span></div>
                    <div class="flex justify-between font-bold text-lg"><span>Total</span><span>৳{{ number_format($total, 2) }}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
