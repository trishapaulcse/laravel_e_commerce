@extends('admin.layouts.app')

@section('title', 'Products')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Products</h1>
    <a href="{{ route('admin.products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Product</a>
</div>

<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Image</th>
                <th class="text-left p-4">Title</th>
                <th class="text-left p-4">SKU</th>
                <th class="text-left p-4">Category</th>
                <th class="text-left p-4">Brand</th>
                <th class="text-left p-4">Price</th>
                <th class="text-left p-4">Stock</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr class="border-b">
                <td class="p-4">
                    @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="w-12 h-12 object-cover rounded">
                    @else
                    <div class="w-12 h-12 bg-gray-200 rounded"></div>
                    @endif
                </td>
                <td class="p-4">{{ $product->title }}</td>
                <td class="p-4">{{ $product->sku }}</td>
                <td class="p-4">{{ $product->category->name ?? '-' }}</td>
                <td class="p-4">{{ $product->brand->name ?? '-' }}</td>
                <td class="p-4">৳{{ number_format($product->price, 2) }}</td>
                <td class="p-4">{{ $product->stock }}</td>
                <td class="p-4"><span class="px-2 py-1 rounded text-xs {{ $product->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $product->status }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.products.show', $product->id) }}" class="text-green-600">View</a>
                    <a href="{{ route('admin.products.edit', $product->id) }}" class="text-blue-600 ml-2">Edit</a>
                    <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $products->links() }}
@endsection
