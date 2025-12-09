@extends('admin.layouts.app')
@section('title', 'Create Brand')
@section('content')
<h1 class="text-3xl font-bold mb-6">Create Brand</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.brands.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Status</label>
            <select name="status" class="w-full border p-2 rounded">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
