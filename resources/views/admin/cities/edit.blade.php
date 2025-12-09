@extends('admin.layouts.app')
@section('title', 'Edit City')
@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold">Edit City</h1>
</div>

<div class="bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.cities.update', $city) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block text-sm font-medium mb-2">City Name</label>
            <input type="text" name="name" value="{{ $city->name }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-2">Area Type</label>
            <select name="area_type" class="w-full border rounded px-3 py-2" required>
                <option value="inside" {{ $city->area_type == 'inside' ? 'selected' : '' }}>Inside Dhaka</option>
                <option value="outside" {{ $city->area_type == 'outside' ? 'selected' : '' }}>Outside Dhaka</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-2">Shipping Cost (৳)</label>
            <input type="number" name="shipping_cost" value="{{ $city->shipping_cost }}" step="0.01" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="status" value="1" {{ $city->status ? 'checked' : '' }} class="mr-2">
                <span class="text-sm font-medium">Active</span>
            </label>
        </div>

        <div class="flex gap-2">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update</button>
            <a href="{{ route('admin.cities.index') }}" class="bg-gray-300 text-gray-700 px-6 py-2 rounded hover:bg-gray-400">Cancel</a>
        </div>
    </form>
</div>
@endsection
