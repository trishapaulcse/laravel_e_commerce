@extends('admin.layouts.app')
@section('title', 'Category Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.categories.index') }}" class="text-blue-600">&larr; Back to Categories</a>
</div>

<div class="bg-white p-6 rounded shadow mb-6">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $category->name }}</h1>
        <div>
            <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6">
        <div>
            @if($category->image)
            <img src="{{ asset('storage/' . $category->image) }}" class="w-full h-64 object-cover rounded mb-4">
            @endif
            <div class="mb-3">
                <span class="font-semibold">Slug:</span> {{ $category->slug }}
            </div>
            <div class="mb-3">
                <span class="font-semibold">Parent Category:</span> {{ $category->parent->name ?? 'None' }}
            </div>
            <div class="mb-3">
                <span class="font-semibold">Status:</span> 
                <span class="px-2 py-1 rounded text-xs {{ $category->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $category->status }}</span>
            </div>
        </div>
        <div>
            <div class="mb-3">
                <span class="font-semibold">Description:</span>
                <p class="mt-2">{{ $category->description ?? 'No description' }}</p>
            </div>
            <div class="mb-3">
                <span class="font-semibold">Total Products:</span> {{ $category->products->count() }}
            </div>
            <div class="mb-3">
                <span class="font-semibold">Sub-categories:</span> {{ $category->children->count() }}
            </div>
        </div>
    </div>
</div>

@if($category->children->count() > 0)
<div class="bg-white p-6 rounded shadow mb-6">
    <h2 class="text-xl font-bold mb-4">Sub-categories</h2>
    <div class="grid grid-cols-3 gap-4">
        @foreach($category->children as $child)
        <div class="border p-4 rounded">
            <a href="{{ route('admin.categories.show', $child->id) }}" class="text-blue-600 font-semibold">{{ $child->name }}</a>
            <p class="text-sm text-gray-600">{{ $child->products->count() }} products</p>
        </div>
        @endforeach
    </div>
</div>
@endif

@if($category->products->count() > 0)
<div class="bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Products in this Category</h2>
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-2">Image</th>
                <th class="text-left p-2">Title</th>
                <th class="text-left p-2">SKU</th>
                <th class="text-left p-2">Price</th>
                <th class="text-left p-2">Stock</th>
                <th class="text-left p-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category->products as $product)
            <tr class="border-b">
                <td class="p-2">
                    @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-10 h-10 object-cover rounded">
                    @else
                    <div class="w-10 h-10 bg-gray-200 rounded"></div>
                    @endif
                </td>
                <td class="p-2"><a href="{{ route('admin.products.show', $product->id) }}" class="text-blue-600">{{ $product->title }}</a></td>
                <td class="p-2">{{ $product->sku }}</td>
                <td class="p-2">৳{{ number_format($product->price, 2) }}</td>
                <td class="p-2">{{ $product->stock }}</td>
                <td class="p-2"><span class="px-2 py-1 rounded text-xs {{ $product->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $product->status }}</span></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif
@endsection
