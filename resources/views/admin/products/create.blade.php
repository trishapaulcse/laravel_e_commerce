@extends('admin.layouts.app')
@section('title', 'Create Product')
@section('content')
<h1 class="text-3xl font-bold mb-6">Create Product</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Title</label>
            <input type="text" name="title" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">SKU</label>
            <input type="text" name="sku" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Description</label>
            <textarea name="description" class="w-full border p-2 rounded" rows="3"></textarea>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block mb-2">Category</label>
                <select name="category_id" class="w-full border p-2 rounded" required>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-2">Brand</label>
                <select name="brand_id" class="w-full border p-2 rounded">
                    <option value="">None</option>
                    @foreach($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block mb-2">Unit</label>
                <select name="unit_id" class="w-full border p-2 rounded">
                    <option value="">None</option>
                    @foreach($units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-2">Stock</label>
                <input type="number" name="stock" class="w-full border p-2 rounded" required>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block mb-2">Price</label>
                <input type="number" step="0.01" name="price" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-2">Cost Price</label>
                <input type="number" step="0.01" name="cost_price" class="w-full border p-2 rounded">
            </div>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Image</label>
            <input type="file" name="image" class="w-full border p-2 rounded" accept="image/*">
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
