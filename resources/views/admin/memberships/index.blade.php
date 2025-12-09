@extends('admin.layouts.app')
@section('title', 'Memberships')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Memberships</h1>
    <a href="{{ route('admin.memberships.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add</a>
</div>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Name</th>
                <th class="text-left p-4">Price</th>
                <th class="text-left p-4">Duration</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($memberships as $membership)
            <tr class="border-b">
                <td class="p-4">{{ $membership->name }}</td>
                <td class="p-4">${{ $membership->price }}</td>
                <td class="p-4">{{ $membership->duration_days }} days</td>
                <td class="p-4">{{ $membership->status }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.memberships.edit', $membership->id) }}" class="text-blue-600">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
