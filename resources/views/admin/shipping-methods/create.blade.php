@extends('admin.layouts.app')
@section('title', 'Add Shipping Method')
@section('content')
<h1 class="text-3xl font-bold mb-6">Add Shipping Method</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.shipping-methods.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Cost</label>
            <input type="number" step="0.01" name="cost" class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
