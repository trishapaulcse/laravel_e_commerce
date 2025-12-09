@extends('admin.layouts.app')
@section('title', 'Units')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold">Units</h1>
    <a href="{{ route('admin.units.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded">Add Unit</a>
</div>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Name</th>
                <th class="text-left p-4">Short Code</th>
                <th class="text-left p-4">Status</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($units as $unit)
            <tr class="border-b">
                <td class="p-4">{{ $unit->name }}</td>
                <td class="p-4">{{ $unit->short_code }}</td>
                <td class="p-4">{{ $unit->status }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.units.edit', $unit->id) }}" class="text-blue-600">Edit</a>
                    <form action="{{ route('admin.units.destroy', $unit->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $units->links() }}
@endsection
