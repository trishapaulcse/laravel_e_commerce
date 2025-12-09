@extends('admin.layouts.app')

@section('title', 'Categories')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Categories</h1>
    <a href="{{ route('admin.categories.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Category</a>
</div>

<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Name</th>
                <th class="text-left p-4">Parent</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr class="border-b">
                <td class="p-4">{{ $category->name }}</td>
                <td class="p-4">{{ $category->parent->name ?? '-' }}</td>
                <td class="p-4">{{ $category->status }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $categories->links() }}
@endsection
