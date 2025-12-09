@extends('admin.layouts.app')
@section('title', 'Shipping Methods')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-shipping-fast mr-2"></i>Shipping Methods</h1>
    <a href="{{ route('admin.shipping-methods.create') }}" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-plus mr-2"></i>Add</a>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-truck mr-2"></i>Name</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-dollar-sign mr-2"></i>Cost</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cog mr-2"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($shippingMethods as $method)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-medium text-gray-800">{{ $method->name }}</span></td>
                <td class="p-4"><span class="font-semibold text-indigo-600">৳{{ number_format($method->cost, 2) }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.shipping-methods.edit', $method->id) }}" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            @empty
            <tr><td colspan="3" class="p-8 text-center text-gray-500"><i class="fas fa-shipping-fast text-4xl mb-2 block"></i>No shipping methods found</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
