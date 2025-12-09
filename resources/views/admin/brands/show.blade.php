@extends('admin.layouts.app')
@section('title', 'Brand Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.brands.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $brand->name }}</h1>
        <a href="{{ route('admin.brands.edit', $brand->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    <div class="mb-3"><span class="font-semibold">Slug:</span> {{ $brand->slug }}</div>
    @if($brand->logo)
    <div class="mb-3"><img src="{{ asset('storage/' . $brand->logo) }}" class="w-32 h-32 object-cover"></div>
    @endif
    <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $brand->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $brand->status }}</span></div>
    <div class="mb-3"><span class="font-semibold">Total Products:</span> {{ $brand->products->count() }}</div>
</div>
@endsection
