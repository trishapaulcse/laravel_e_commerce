@extends('admin.layouts.app')
@section('title', 'Create Discount')
@section('content')
<h1 class="text-3xl font-bold mb-6">Create Discount</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.discounts.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Type</label>
            <select name="type" class="w-full border p-2 rounded">
                <option value="fixed">Fixed</option>
                <option value="percentage">Percentage</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Value</label>
            <input type="number" step="0.01" name="value" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Applies To</label>
            <select name="applies_to" class="w-full border p-2 rounded">
                <option value="item">Item</option>
                <option value="category">Category</option>
                <option value="bundle">Bundle</option>
                <option value="cart">Cart</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Start Date</label>
            <input type="datetime-local" name="start_date" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2">End Date</label>
            <input type="datetime-local" name="end_date" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2">Status</label>
            <select name="status" class="w-full border p-2 rounded">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
