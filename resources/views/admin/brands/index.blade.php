@extends('admin.layouts.app')
@section('title', 'Brands')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Brands</h1>
    <a href="{{ route('admin.brands.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Brand</a>
</div>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Logo</th>
                <th class="text-left p-4">Name</th>
                <th class="text-left p-4">Slug</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($brands as $brand)
            <tr class="border-b">
                <td class="p-4">
                    @if($brand->logo)
                    <img src="{{ asset('storage/' . $brand->logo) }}" class="w-12 h-12 object-cover rounded">
                    @else
                    <div class="w-12 h-12 bg-gray-200 rounded"></div>
                    @endif
                </td>
                <td class="p-4">{{ $brand->name }}</td>
                <td class="p-4">{{ $brand->slug }}</td>
                <td class="p-4"><span class="px-2 py-1 rounded text-xs {{ $brand->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $brand->status }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.brands.show', $brand->id) }}" class="text-green-600">View</a>
                    <a href="{{ route('admin.brands.edit', $brand->id) }}" class="text-blue-600 ml-2">Edit</a>
                    <form action="{{ route('admin.brands.destroy', $brand->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $brands->links() }}
@endsection
