@extends('website.layouts.app')
@section('title', 'Categories')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8">All Categories</h1>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        @forelse($categories as $category)
        <a href="{{ route('website.categories.show', $category->id) }}" class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition text-center">
            <i class="fas fa-book text-4xl text-indigo-600 mb-3"></i>
            <h3 class="font-semibold">{{ $category->name }}</h3>
            <p class="text-sm text-gray-500 mt-2">{{ $category->description }}</p>
        </a>
        @empty
        <p class="col-span-4 text-center text-gray-500">No categories available</p>
        @endforelse
    </div>
</div>
@endsection
