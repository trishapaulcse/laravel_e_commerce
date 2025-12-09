@extends('admin.layouts.app')
@section('title', 'Blogs')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Blogs</h1>
    <a href="{{ route('admin.blogs.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Blog</a>
</div>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Title</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blogs as $blog)
            <tr class="border-b">
                <td class="p-4">{{ $blog->title }}</td>
                <td class="p-4">{{ $blog->status }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="text-blue-600">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
