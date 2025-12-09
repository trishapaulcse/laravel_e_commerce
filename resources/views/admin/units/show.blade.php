@extends('admin.layouts.app')
@section('title', 'Unit Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.units.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $unit->name }}</h1>
        <a href="{{ route('admin.units.edit', $unit->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    <div class="mb-3"><span class="font-semibold">Short Code:</span> {{ $unit->short_code }}</div>
    <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $unit->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $unit->status }}</span></div>
</div>
@endsection
