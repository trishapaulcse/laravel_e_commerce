@extends('admin.layouts.app')
@section('title', 'Create Page')
@section('content')
<h1 class="text-3xl font-bold mb-6">Create Page</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.pages.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Title</label>
            <input type="text" name="title" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Content</label>
            <textarea name="content" class="w-full border p-2 rounded" rows="10" required></textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Meta Title</label>
            <input type="text" name="meta_title" class="w-full border p-2 rounded">
        </div>
        <div class="mb-4">
            <label class="block mb-2">Meta Description</label>
            <textarea name="meta_description" class="w-full border p-2 rounded" rows="3"></textarea>
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
