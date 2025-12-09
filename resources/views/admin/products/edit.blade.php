@extends('admin.layouts.app')
@section('title', 'Edit Product')
@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Product</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-2">Title</label>
            <input type="text" name="title" value="{{ $product->title }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Category</label>
            <select name="category_id" class="w-full border p-2 rounded" required>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}" {{ $product->category_id == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Price</label>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Stock</label>
            <input type="number" name="stock" value="{{ $product->stock }}" class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
