@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>Order Details - #{{ $order->order_number }}</h2>
    
    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Status:</strong> {{ $order->status }}</p>
            <p><strong>Date:</strong> {{ $order->created_at->format('d M Y, h:i A') }}</p>
            <p><strong>Payment Method:</strong> {{ $order->payment_method }}</p>
            <p><strong>Total Amount:</strong> {{ $order->total_amount }} BDT</p>
        </div>
    </div>

    <h4>Order Items</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td>{{ $item->product->title }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }} BDT</td>
                <td>{{ $item->total_price }} BDT</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="text-end">
        <a href="{{ route('user.orders.tracking', $order->id) }}" class="btn btn-info">Track Order</a>
    </div>
</div>
@endsection
