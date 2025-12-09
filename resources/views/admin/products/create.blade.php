@extends('admin.layouts.app')
@section('title', 'Create Product')
@section('content')
<h1 class="text-3xl font-bold mb-6">Create Product</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Title</label>
            <input type="text" name="title" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Category</label>
            <select name="category_id" class="w-full border p-2 rounded" required>
                @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Price</label>
            <input type="number" step="0.01" name="price" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Stock</label>
            <input type="number" name="stock" class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
