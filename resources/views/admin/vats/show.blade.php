@extends('admin.layouts.app')
@section('title', 'VAT Details')
@section('content')
<div class="mb-6">
    <a href="{{ route('admin.vats.index') }}" class="text-blue-600">&larr; Back</a>
</div>
<div class="bg-white p-6 rounded shadow">
    <div class="flex justify-between items-start mb-4">
        <h1 class="text-3xl font-bold">{{ $vat->name }}</h1>
        <a href="{{ route('admin.vats.edit', $vat->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded">Edit</a>
    </div>
    <div class="mb-3"><span class="font-semibold">Type:</span> {{ $vat->type }}</div>
    <div class="mb-3"><span class="font-semibold">Value:</span> {{ $vat->value }}{{ $vat->type == 'percentage' ? '%' : '৳' }}</div>
    <div class="mb-3"><span class="font-semibold">Applies To:</span> {{ $vat->applies_to }}</div>
    <div class="mb-3"><span class="font-semibold">Priority:</span> {{ $vat->priority }}</div>
    <div class="mb-3"><span class="font-semibold">Status:</span> <span class="px-2 py-1 rounded text-xs {{ $vat->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">{{ $vat->status }}</span></div>
</div>
@endsection
