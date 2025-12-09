@extends('admin.layouts.app')
@section('title', 'Edit Product')
@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Product</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-2">Title</label>
            <input type="text" name="title" value="{{ $product->title }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">SKU</label>
            <input type="text" name="sku" value="{{ $product->sku }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Description</label>
            <textarea name="description" class="w-full border p-2 rounded" rows="3">{{ $product->description }}</textarea>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block mb-2">Category</label>
                <select name="category_id" class="w-full border p-2 rounded" required>
                    @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-2">Brand</label>
                <select name="brand_id" class="w-full border p-2 rounded">
                    <option value="">None</option>
                    @foreach($brands as $brand)
                    <option value="{{ $brand->id }}" {{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
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
                    <option value="{{ $unit->id }}" {{ $product->unit_id == $unit->id ? 'selected' : '' }}>{{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label class="block mb-2">Stock</label>
                <input type="number" name="stock" value="{{ $product->stock }}" class="w-full border p-2 rounded" required>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                <label class="block mb-2">Price</label>
                <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block mb-2">Cost Price</label>
                <input type="number" step="0.01" name="cost_price" value="{{ $product->cost_price }}" class="w-full border p-2 rounded">
            </div>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Image</label>
            @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" class="w-32 h-32 object-cover mb-2">
            @endif
            <input type="file" name="image" class="w-full border p-2 rounded" accept="image/*">
        </div>
        <div class="mb-4">
            <label class="block mb-2">Status</label>
            <select name="status" class="w-full border p-2 rounded">
                <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
