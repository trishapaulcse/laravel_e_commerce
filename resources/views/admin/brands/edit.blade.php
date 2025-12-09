@extends('admin.layouts.app')
@section('title', 'Edit Brand')
@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Brand</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" value="{{ $brand->name }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Logo</label>
            @if($brand->logo)
            <img src="{{ asset('storage/' . $brand->logo) }}" class="w-32 h-32 object-cover mb-2">
            @endif
            <input type="file" name="logo" class="w-full border p-2 rounded" accept="image/*">
        </div>
        <div class="mb-4">
            <label class="block mb-2">Status</label>
            <select name="status" class="w-full border p-2 rounded">
                <option value="active" {{ $brand->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $brand->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
