@extends('admin.layouts.app')
@section('title', 'Role Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.roles.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $role->name }}</h1>
        <a href="{{ route('admin.roles.edit', $role->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    <div class="mb-3"><span class="font-semibold">Description:</span> {{ $role->description ?? 'N/A' }}</div>
    <div class="mb-3"><span class="font-semibold">Total Users:</span> {{ $role->users->count() }}</div>
    <div class="mt-6">
        <h3 class="font-semibold mb-2">Permissions:</h3>
        <div class="grid grid-cols-3 gap-2">
            @foreach($role->permissions as $permission)
            <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded text-sm">{{ $permission->name }}</span>
            @endforeach
        </div>
    </div>
</div>
@endsection
