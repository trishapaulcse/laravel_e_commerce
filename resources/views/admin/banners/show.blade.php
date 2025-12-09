@extends('admin.layouts.app')
@section('title', 'Banner Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.banners.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $banner->title }}</h1>
        <a href="{{ route('admin.banners.edit', $banner->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    @if($banner->image)
    <img src="{{ asset('storage/' . $banner->image) }}" class="w-full h-96 object-cover rounded mb-4">
    @endif
    <div class="mb-3"><span class="font-semibold">Link:</span> {{ $banner->link ?? 'N/A' }}</div>
    <div class="mb-3"><span class="font-semibold">Order:</span> {{ $banner->order }}</div>
    <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $banner->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $banner->status }}</span></div>
</div>
@endsection
