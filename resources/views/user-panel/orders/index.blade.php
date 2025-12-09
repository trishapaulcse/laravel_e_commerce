@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>My Orders</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Order #</th>
                <th>Date</th>
                <th>Total</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->order_number }}</td>
                <td>{{ $order->created_at->format('d M Y') }}</td>
                <td>{{ $order->total_amount }} BDT</td>
                <td><span class="badge bg-info">{{ $order->status }}</span></td>
                <td>
                    <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-sm btn-primary">View</a>
                    <a href="{{ route('user.orders.tracking', $order->id) }}" class="btn btn-sm btn-info">Track</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $orders->links() }}
</div>
@endsection
