@extends('admin.layouts.app')
@section('title', 'Edit Blog')
@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Blog</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-2">Title</label>
            <input type="text" name="title" value="{{ $blog->title }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Content</label>
            <textarea name="content" class="w-full border p-2 rounded" rows="10" required>{{ $blog->content }}</textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
