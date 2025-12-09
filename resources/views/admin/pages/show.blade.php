@extends('admin.layouts.app')
@section('title', 'Page Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.pages.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $page->title }}</h1>
        <a href="{{ route('admin.pages.edit', $page->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    <div class="mb-3"><span class="font-semibold">Slug:</span> {{ $page->slug }}</div>
    <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $page->status == 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">{{ $page->status }}</span></div>
    <div class="mt-6">
        <h3 class="font-semibold mb-2">Content:</h3>
        <div class="prose max-w-none">{!! $page->content !!}</div>
    </div>
</div>
@endsection
