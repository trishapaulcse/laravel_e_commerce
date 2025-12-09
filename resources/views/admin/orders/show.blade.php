@extends('admin.layouts.app')
@section('title', 'Order Details')
@section('content')
<h1 class="text-3xl font-bold mb-6">Order #{{ $order->id }}</h1>
<div class="grid grid-cols-2 gap-6">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Customer Information</h2>
        <p><strong>Name:</strong> {{ $order->user->name }}</p>
        <p><strong>Email:</strong> {{ $order->user->email }}</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Order Information</h2>
        <p><strong>Status:</strong> {{ $order->status }}</p>
        <p><strong>Total:</strong> ${{ $order->total_amount }}</p>
    </div>
</div>
@endsection
