@extends('admin.layouts.app')
@section('title', 'Edit Discount')
@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Discount</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.discounts.update', $discount->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" value="{{ $discount->name }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Type</label>
            <select name="type" class="w-full border p-2 rounded">
                <option value="fixed" {{ $discount->type == 'fixed' ? 'selected' : '' }}>Fixed</option>
                <option value="percentage" {{ $discount->type == 'percentage' ? 'selected' : '' }}>Percentage</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Value</label>
            <input type="number" step="0.01" name="value" value="{{ $discount->value }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Applies To</label>
            <select name="applies_to" class="w-full border p-2 rounded">
                <option value="item" {{ $discount->applies_to == 'item' ? 'selected' : '' }}>Item</option>
                <option value="category" {{ $discount->applies_to == 'category' ? 'selected' : '' }}>Category</option>
                <option value="bundle" {{ $discount->applies_to == 'bundle' ? 'selected' : '' }}>Bundle</option>
                <option value="cart" {{ $discount->applies_to == 'cart' ? 'selected' : '' }}>Cart</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Status</label>
            <select name="status" class="w-full border p-2 rounded">
                <option value="active" {{ $discount->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $discount->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
