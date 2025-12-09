@extends('website.layouts.app')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">Checkout</h1>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="lg:col-span-2">
            <form action="{{ route('website.checkout.store') }}" method="POST">
                @csrf
                @guest
                <div class="bg-white rounded-lg shadow p-6 mb-6">
                    <h2 class="text-xl font-bold mb-4">Account Information</h2>
                    <div class="grid grid-cols-2 gap-4">
                        <div><label class="block mb-2">Full Name *</label><input type="text" name="name" required class="w-full border rounded px-3 py-2"></div>
                        <div><label class="block mb-2">Email *</label><input type="email" name="email" required class="w-full border rounded px-3 py-2"></div>
                        <div><label class="block mb-2">Phone *</label><input type="text" name="phone" required class="w-full border rounded px-3 py-2"></div>
                        <div><label class="block mb-2">Password (Optional)</label><input type="password" name="password" class="w-full border rounded px-3 py-2" placeholder="Auto-generated if empty"></div>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">An account will be created automatically for you</p>
                </div>
                @endguest
                <div class="bg-white rounded-lg shadow p-6 mb-6">
                    <h2 class="text-xl font-bold mb-4">Shipping Address</h2>
                    <div class="grid grid-cols-2 gap-4">
                        @auth
                        <div><label class="block mb-2">Full Name</label><input type="text" name="name" value="{{ auth()->user()->name }}" required class="w-full border rounded px-3 py-2"></div>
                        <div><label class="block mb-2">Phone</label><input type="text" name="phone" value="{{ auth()->user()->phone }}" required class="w-full border rounded px-3 py-2"></div>
                        <input type="hidden" name="email" value="{{ auth()->user()->email }}">
                        @else
                        <div class="col-span-2"><label class="block mb-2">Address *</label><textarea name="address" required class="w-full border rounded px-3 py-2" rows="3"></textarea></div>
                        @endauth
                        @auth
                        <div class="col-span-2"><label class="block mb-2">Address</label><textarea name="address" required class="w-full border rounded px-3 py-2" rows="3"></textarea></div>
                        @endauth
                        <div>
                            <label class="block mb-2">City *</label>
                            <select name="city_id" required class="w-full border rounded px-3 py-2">
                                <option value="">Select City</option>
                                @foreach($cities as $city)
                                <option value="{{ $city->id }}">
                                    {{ $city->name }} - ৳{{ number_format($city->shipping_cost, 2) }} ({{ ucfirst($city->area_type) }})
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div><label class="block mb-2">Postal Code</label><input type="text" name="postal_code" class="w-full border rounded px-3 py-2"></div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-xl font-bold mb-4">Payment Method</h2>
                    <div class="space-y-3">
                        @if($paymentMethods['bkash'])
                        <label class="flex items-center justify-between p-4 border-2 rounded-lg cursor-pointer hover:border-pink-500 hover:bg-pink-50 transition payment-option">
                            <div class="flex items-center">
                                <input type="radio" name="payment_method" value="bkash" required class="mr-3 w-5 h-5 text-pink-600">
                                <div>
                                    <span class="font-bold text-lg text-pink-600">bKash</span>
                                    <p class="text-xs text-gray-500">Pay securely with bKash</p>
                                    <span class="inline-block mt-1 px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Sandbox Mode</span>
                                </div>
                            </div>
                            <i class="fas fa-mobile-alt text-3xl text-pink-600"></i>
                        </label>
                        @endif
                        
                        @if($paymentMethods['nagad'])
                        <label class="flex items-center justify-between p-4 border-2 rounded-lg cursor-pointer hover:border-orange-500 hover:bg-orange-50 transition payment-option">
                            <div class="flex items-center">
                                <input type="radio" name="payment_method" value="nagad" required class="mr-3 w-5 h-5 text-orange-600">
                                <div>
                                    <span class="font-bold text-lg text-orange-600">Nagad</span>
                                    <p class="text-xs text-gray-500">Pay securely with Nagad</p>
                                    <span class="inline-block mt-1 px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded">Sandbox Mode</span>
                                </div>
                            </div>
                            <i class="fas fa-wallet text-3xl text-orange-600"></i>
                        </label>
                        @endif
                        
                        @if($paymentMethods['cod'])
                        <label class="flex items-center justify-between p-4 border-2 rounded-lg cursor-pointer hover:border-green-500 hover:bg-green-50 transition payment-option">
                            <div class="flex items-center">
                                <input type="radio" name="payment_method" value="cod" required class="mr-3 w-5 h-5 text-green-600">
                                <div>
                                    <span class="font-bold text-lg text-green-600">Cash on Delivery</span>
                                    <p class="text-xs text-gray-500">Pay when you receive</p>
                                </div>
                            </div>
                            <i class="fas fa-hand-holding-usd text-3xl text-green-600"></i>
                        </label>
                        @endif
                    </div>
                    
                    <div id="payment-info" class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-lg hidden">
                        <h3 class="font-bold text-blue-800 mb-2"><i class="fas fa-info-circle mr-2"></i>Payment Instructions</h3>
                        <div id="bkash-info" class="hidden">
                            <p class="text-sm text-blue-700 mb-2">You will be redirected to bKash payment gateway after placing order.</p>
                            <p class="text-xs text-blue-600"><strong>Test Mode:</strong> Use sandbox credentials for testing.</p>
                        </div>
                        <div id="nagad-info" class="hidden">
                            <p class="text-sm text-blue-700 mb-2">You will be redirected to Nagad payment gateway after placing order.</p>
                            <p class="text-xs text-blue-600"><strong>Test Mode:</strong> Use sandbox credentials for testing.</p>
                        </div>
                        <div id="cod-info" class="hidden">
                            <p class="text-sm text-blue-700">Please keep exact cash ready when receiving your order.</p>
                        </div>
                    </div>
                </div>
                
                <script>
                document.querySelectorAll('input[name="payment_method"]').forEach(radio => {
                    radio.addEventListener('change', function() {
                        document.getElementById('payment-info').classList.remove('hidden');
                        document.querySelectorAll('#payment-info > div > div').forEach(div => div.classList.add('hidden'));
                        document.getElementById(this.value + '-info').classList.remove('hidden');
                    });
                });
                </script>
                <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-lg mt-6 font-semibold hover:bg-indigo-700">Place Order</button>
            </form>
        </div>
        <div>
            <div class="bg-white rounded-lg shadow p-6 sticky top-4">
                <h2 class="text-xl font-bold mb-4">Order Summary</h2>
                <div class="space-y-3 mb-4">
                    @foreach($cartItems as $item)
                    <div class="flex justify-between text-sm">
                        <span>{{ $item['item']->title ?? $item['item']->name }} x{{ $item['quantity'] }}</span>
                        <span>৳{{ number_format(($item['price'] - $item['discount']) * $item['quantity'], 2) }}</span>
                    </div>
                    @endforeach
                </div>
                <div class="border-t pt-4 space-y-2">
                    <div class="flex justify-between"><span>Subtotal</span><span>৳{{ number_format($calculations['subtotal'], 2) }}</span></div>
                    @if($calculations['discount'] > 0)
                    <div class="flex justify-between text-red-600"><span>Discount</span><span>-৳{{ number_format($calculations['discount'], 2) }}</span></div>
                    @endif
                    @if($calculations['coupon_discount'] > 0)
                    <div class="flex justify-between text-red-600"><span>Coupon</span><span>-৳{{ number_format($calculations['coupon_discount'], 2) }}</span></div>
                    @endif
                    @if($calculations['vat'] > 0)
                    <div class="flex justify-between"><span>VAT</span><span>৳{{ number_format($calculations['vat'], 2) }}</span></div>
                    @endif
                    <div class="flex justify-between"><span>Shipping</span><span>৳{{ number_format($calculations['shipping'], 2) }}</span></div>
                    <div class="flex justify-between font-bold text-lg border-t pt-2"><span>Total</span><span>৳{{ number_format($calculations['total'], 2) }}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
