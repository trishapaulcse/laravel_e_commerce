@extends('admin.layouts.app')
@section('title', 'Customer Details')
@section('content')
<h1 class="text-3xl font-bold mb-6">Customer Details</h1>
<div class="bg-white p-6 rounded shadow">
    <p><strong>Name:</strong> {{ $customer->name }}</p>
    <p><strong>Email:</strong> {{ $customer->email }}</p>
    <p><strong>Phone:</strong> {{ $customer->phone ?? 'N/A' }}</p>
    <p><strong>Total Orders:</strong> {{ $customer->orders->count() }}</p>
</div>
@endsection
