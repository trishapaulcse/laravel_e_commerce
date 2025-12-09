@extends('admin.layouts.app')
@section('title', 'Add Customer')
@section('content')
<h1 class="text-3xl font-bold mb-6">Add Customer</h1>
<div class="bg-white p-6 rounded shadow">
    <form action="{{ route('admin.customers.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label class="block mb-2">Name</label>
            <input type="text" name="name" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Email</label>
            <input type="email" name="email" class="w-full border p-2 rounded" required>
        </div>
        <div class="mb-4">
            <label class="block mb-2">Password</label>
            <input type="password" name="password" class="w-full border p-2 rounded" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Create</button>
    </form>
</div>
@endsection
