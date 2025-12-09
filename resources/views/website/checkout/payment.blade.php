@extends('website.layouts.app')
@section('title', 'Payment')
@section('content')
<div class="max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold mb-6">Select Payment Method</h1>
    
    <div class="bg-white p-6 rounded shadow">
        <form action="{{ route('website.payment.process', $order->id) }}" method="POST">
            @csrf
            
            <div class="space-y-4">
                @foreach($paymentGateways as $gateway)
                <label class="flex items-center p-4 border rounded cursor-pointer hover:bg-gray-50">
                    <input type="radio" name="payment_method" value="{{ $gateway->slug }}" class="mr-3" required>
                    <div class="flex-1">
                        <div class="font-bold">{{ $gateway->name }}</div>
                        @if($gateway->slug == 'bkash')
                        <div class="text-sm text-gray-600">Pay with bKash mobile wallet</div>
                        @elseif($gateway->slug == 'nagad')
                        <div class="text-sm text-gray-600">Pay with Nagad mobile wallet</div>
                        @elseif($gateway->slug == 'cod')
                        <div class="text-sm text-gray-600">Pay cash when you receive the order</div>
                        @endif
                    </div>
                    @if($gateway->slug == 'bkash')
                    <img src="/images/bkash-logo.png" alt="bKash" class="h-8">
                    @elseif($gateway->slug == 'nagad')
                    <img src="/images/nagad-logo.png" alt="Nagad" class="h-8">
                    @endif
                </label>
                @endforeach
            </div>
            
            <div class="mt-6 p-4 bg-gray-50 rounded">
                <div class="flex justify-between mb-2">
                    <span>Subtotal:</span>
                    <span>${{ $order->total_amount }}</span>
                </div>
                <div class="flex justify-between font-bold text-lg">
                    <span>Total:</span>
                    <span>${{ $order->total_amount }}</span>
                </div>
            </div>
            
            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded mt-6 hover:bg-blue-700">
                Proceed to Payment
            </button>
        </form>
    </div>
</div>
@endsection
