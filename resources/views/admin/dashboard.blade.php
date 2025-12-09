@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<h1 class="text-3xl font-bold mb-8">Dashboard</h1>

<div class="grid grid-cols-3 gap-6 mb-8">
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-gray-600 mb-2">Total Orders</h3>
        <p class="text-3xl font-bold">{{ $totalOrders }}</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-gray-600 mb-2">Total Products</h3>
        <p class="text-3xl font-bold">{{ $totalProducts }}</p>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h3 class="text-gray-600 mb-2">Total Users</h3>
        <p class="text-3xl font-bold">{{ $totalUsers }}</p>
    </div>
</div>

<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Recent Orders</h2>
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left py-2">Order ID</th>
                <th class="text-left py-2">Customer</th>
                <th class="text-left py-2">Amount</th>
                <th class="text-left py-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentOrders as $order)
            <tr class="border-b">
                <td class="py-2">#{{ $order->id }}</td>
                <td class="py-2">{{ $order->user->name ?? 'N/A' }}</td>
                <td class="py-2">${{ $order->total_amount }}</td>
                <td class="py-2">{{ $order->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
