@extends('admin.layouts.app')
@section('title', 'Customers')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-users mr-2"></i>Customers</h1>
    <a href="{{ route('admin.customers.create') }}" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-plus mr-2"></i>Add Customer</a>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-user mr-2"></i>Name</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-envelope mr-2"></i>Email</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-phone mr-2"></i>Phone</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-shopping-cart mr-2"></i>Orders</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cog mr-2"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($customers as $customer)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-medium text-gray-800">{{ $customer->name }}</span></td>
                <td class="p-4"><span class="text-gray-600">{{ $customer->email }}</span></td>
                <td class="p-4"><span class="text-gray-600">{{ $customer->phone ?? 'N/A' }}</span></td>
                <td class="p-4"><span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full font-semibold">{{ $customer->orders->count() }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.customers.show', $customer->id) }}" class="text-indigo-600 hover:text-indigo-800 mr-3"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('admin.customers.edit', $customer->id) }}" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="p-8 text-center text-gray-500"><i class="fas fa-users text-4xl mb-2 block"></i>No customers found</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-4">{{ $customers->links() }}</div>
@endsection
