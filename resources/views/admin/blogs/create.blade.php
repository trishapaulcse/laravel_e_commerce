@extends('admin.layouts.app')
@section('title', 'Create Blog')
@section('content')
<h1 class="text-3xl font-bold mb-6">Create Blog</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.blogs.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Title</label>
            <input type="text" name="title" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Content</label>
            <textarea name="content" class="w-full border p-2 rounded" rows="10" required></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
