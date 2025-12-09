@extends('admin.layouts.app')
@section('title', 'VAT Rules')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-file-invoice-dollar mr-2"></i>VAT Rules</h1>
    <a href="{{ route('admin.vats.create') }}" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-plus mr-2"></i>Add VAT</a>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-tag mr-2"></i>Name</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-list mr-2"></i>Type</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-percent mr-2"></i>Value</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-toggle-on mr-2"></i>Status</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cog mr-2"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($vats as $vat)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-medium text-gray-800">{{ $vat->name }}</span></td>
                <td class="p-4"><span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm">{{ ucfirst($vat->type) }}</span></td>
                <td class="p-4"><span class="font-semibold text-indigo-600">{{ $vat->value }}%</span></td>
                <td class="p-4"><span class="px-2 py-1 rounded text-sm {{ $vat->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">{{ $vat->status ? 'Active' : 'Inactive' }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.vats.edit', $vat) }}" class="text-green-600 hover:text-green-800 mr-3"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.vats.destroy', $vat) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Delete this VAT rule?')"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="p-8 text-center text-gray-500"><i class="fas fa-file-invoice-dollar text-4xl mb-2 block"></i>No VAT rules found</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
