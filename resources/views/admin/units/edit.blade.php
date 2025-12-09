@extends('admin.layouts.app')
@section('title', 'Edit Unit')
@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Unit</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.units.update', $unit->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" value="{{ $unit->name }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Short Code</label>
            <input type="text" name="short_code" value="{{ $unit->short_code }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Status</label>
            <select name="status" class="w-full border p-2 rounded">
                <option value="active" {{ $unit->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $unit->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
