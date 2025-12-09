@extends('admin.layouts.app')
@section('title', 'Orders')
@section('content')
<h1 class="text-3xl font-bold mb-6">Orders</h1>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Order ID</th>
                <th class="text-left p-4">Customer</th>
                <th class="text-left p-4">Amount</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr class="border-b">
                <td class="p-4">#{{ $order->id }}</td>
                <td class="p-4">{{ $order->user->name ?? 'N/A' }}</td>
                <td class="p-4">${{ $order->total_amount }}</td>
                <td class="p-4">{{ $order->status }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.orders.show', $order->id) }}" class="text-blue-600">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $orders->links() }}
@endsection
