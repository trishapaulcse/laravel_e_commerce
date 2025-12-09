@extends('admin.layouts.app')
@section('title', 'Customers')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Customers</h1>
    <a href="{{ route('admin.customers.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Customer</a>
</div>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Name</th>
                <th class="text-left p-4">Email</th>
                <th class="text-left p-4">Phone</th>
                <th class="text-left p-4">Orders</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr class="border-b">
                <td class="p-4">{{ $customer->name }}</td>
                <td class="p-4">{{ $customer->email }}</td>
                <td class="p-4">{{ $customer->phone ?? 'N/A' }}</td>
                <td class="p-4">{{ $customer->orders->count() }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.customers.show', $customer->id) }}" class="text-blue-600">View</a>
                    <a href="{{ route('admin.customers.edit', $customer->id) }}" class="text-green-600 ml-2">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $customers->links() }}
@endsection
