@extends('admin.layouts.app')
@section('title', 'Pages')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">CMS Pages</h1>
    <a href="{{ route('admin.pages.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Page</a>
</div>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Title</th>
                <th class="text-left p-4">Slug</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pages as $page)
            <tr class="border-b">
                <td class="p-4">{{ $page->title }}</td>
                <td class="p-4">{{ $page->slug }}</td>
                <td class="p-4">{{ $page->status }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.pages.edit', $page->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $pages->links() }}
@endsection
