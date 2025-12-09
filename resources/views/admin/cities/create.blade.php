@extends('admin.layouts.app')
@section('title', 'Add City')
@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold">Add New City</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.cities.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium mb-2">City Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-2">Area Type</label>
            <select name="area_type" class="w-full border rounded px-3 py-2" required>
                <option value="inside">Inside Dhaka</option>
                <option value="outside">Outside Dhaka</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-2">Shipping Cost (৳)</label>
            <input type="number" name="shipping_cost" step="0.01" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="status" value="1" checked class="mr-2">
                <span class="text-sm font-medium">Active</span>
            </label>
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Save</button>
            <a href="{{ route('admin.cities.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">Cancel</a>
        </div>
    </form>
</div>
@endsection
