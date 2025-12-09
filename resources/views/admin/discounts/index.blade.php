@extends('admin.layouts.app')
@section('title', 'Discounts')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Discounts</h1>
    <a href="{{ route('admin.discounts.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Discount</a>
</div>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Name</th>
                <th class="text-left p-4">Type</th>
                <th class="text-left p-4">Value</th>
                <th class="text-left p-4">Applies To</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($discounts as $discount)
            <tr class="border-b">
                <td class="p-4">{{ $discount->name }}</td>
                <td class="p-4">{{ $discount->type }}</td>
                <td class="p-4">{{ $discount->value }}</td>
                <td class="p-4">{{ $discount->applies_to }}</td>
                <td class="p-4">{{ $discount->status }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.discounts.edit', $discount->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('admin.discounts.destroy', $discount->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $discounts->links() }}
@endsection
