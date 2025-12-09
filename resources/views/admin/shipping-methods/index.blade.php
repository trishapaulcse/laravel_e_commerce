@extends('admin.layouts.app')
@section('title', 'Shipping Methods')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Shipping Methods</h1>
    <a href="{{ route('admin.shipping-methods.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add</a>
</div>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Name</th>
                <th class="text-left p-4">Cost</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($shippingMethods as $method)
            <tr class="border-b">
                <td class="p-4">{{ $method->name }}</td>
                <td class="p-4">${{ $method->cost }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.shipping-methods.edit', $method->id) }}" class="text-blue-600">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
