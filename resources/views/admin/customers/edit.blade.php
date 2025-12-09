@extends('admin.layouts.app')
@section('title', 'Edit Customer')
@section('content')
<h1 class="text-3xl font-bold mb-6">Edit Customer</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.customers.update', $customer->id) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" value="{{ $customer->name }}" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Email</label>
            <input type="email" name="email" value="{{ $customer->email }}" class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
