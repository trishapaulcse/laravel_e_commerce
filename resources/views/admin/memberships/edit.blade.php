@extends('admin.layouts.app')
@section('title', 'Edit Membership')
@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Membership</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.memberships.update', $membership->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" value="{{ $membership->name }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Price</label>
            <input type="number" step="0.01" name="price" value="{{ $membership->price }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Duration (days)</label>
            <input type="number" name="duration_days" value="{{ $membership->duration_days }}" class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
