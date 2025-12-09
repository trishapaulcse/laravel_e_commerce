@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Total Orders</h5>
                    <h3>{{ auth()->user()->orders()->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Pending Orders</h5>
                    <h3>{{ auth()->user()->orders()->where('status', 'pending')->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Wishlist Items</h5>
                    <h3>{{ auth()->user()->wishlists()->count() }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5>Wallet Balance</h5>
                    <h3>{{ auth()->user()->wallet_balance ?? 0 }} BDT</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h4>Recent Orders</h4>
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
                    @foreach(auth()->user()->orders()->latest()->limit(5)->get() as $order)
                    <tr>
                        <td>{{ $order->order_number }}</td>
                        <td>{{ $order->created_at->format('d M Y') }}</td>
                        <td>{{ $order->total_amount }} BDT</td>
                        <td><span class="badge bg-info">{{ $order->status }}</span></td>
                        <td>
                            <a href="{{ route('user.orders.show', $order) }}" class="btn btn-sm btn-primary">View</a>
                            <a href="{{ route('user.orders.tracking', $order) }}" class="btn btn-sm btn-info">Track</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h4>My Purchase Report</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Total Spent</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $purchases = auth()->user()->orders()
                        ->where('status', 'delivered')
                        ->with('items.item')
                        ->get()
                        ->flatMap(fn($order) => $order->items)
                        ->groupBy('item_id')
                        ->map(function($items) {
                            return [
                                'title' => $items->first()->item->title,
                                'quantity' => $items->sum('quantity'),
                                'total' => $items->sum('total_price')
                            ];
                        })
                        ->sortByDesc('total')
                        ->take(10);
                    @endphp
                    @foreach($purchases as $purchase)
                    <tr>
                        <td>{{ $purchase['title'] }}</td>
                        <td>{{ $purchase['quantity'] }}</td>
                        <td>{{ number_format($purchase['total'], 2) }} BDT</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
