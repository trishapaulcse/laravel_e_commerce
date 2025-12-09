@extends('admin.layouts.app')
@section('title', 'Blog Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.blogs.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $blog->title }}</h1>
        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    @if($blog->image)
    <img src="{{ asset('storage/' . $blog->image) }}" class="w-full h-96 object-cover rounded mb-4">
    @endif
    <div class="mb-3"><span class="font-semibold">Slug:</span> {{ $blog->slug }}</div>
    <div class="mb-3"><span class="font-semibold">Author:</span> {{ $blog->author->name ?? 'N/A' }}</div>
    <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $blog->status == 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">{{ $blog->status }}</span></div>
    <div class="mb-3"><span class="font-semibold">Published:</span> {{ $blog->published_at ? \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') : 'N/A' }}</div>
    <div class="mt-6">
        <h3 class="font-semibold mb-2">Content:</h3>
        <div class="prose max-w-none">{!! $blog->content !!}</div>
    </div>
</div>
@endsection
