@extends('admin.layouts.app')
@section('title', 'Create Category')
@section('content')
<h1 class="text-3xl font-bold mb-6">Create Category</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Description</label>
            <textarea name="description" class="w-full border p-2 rounded" rows="3"></textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Parent Category</label>
            <select name="parent_id" class="w-full border p-2 rounded">
                <option value="">None</option>
                @foreach($parentCategories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>
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
