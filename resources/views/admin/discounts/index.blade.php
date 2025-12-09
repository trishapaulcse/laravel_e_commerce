@extends('admin.layouts.app')
@section('title', 'Discounts')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-percent mr-2"></i>Discounts</h1>
    <a href="{{ route('admin.discounts.create') }}" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-plus mr-2"></i>Add Discount</a>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-tag mr-2"></i>Name</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-list mr-2"></i>Type</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-dollar-sign mr-2"></i>Value</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-bullseye mr-2"></i>Applies To</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-toggle-on mr-2"></i>Status</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cog mr-2"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($discounts as $discount)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-medium text-gray-800">{{ $discount->name }}</span></td>
                <td class="p-4"><span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm">{{ ucfirst($discount->type) }}</span></td>
                <td class="p-4"><span class="font-semibold text-indigo-600">{{ $discount->type == 'percentage' ? $discount->value.'%' : '৳'.$discount->value }}</span></td>
                <td class="p-4"><span class="text-gray-600">{{ ucfirst($discount->applies_to) }}</span></td>
                <td class="p-4"><span class="px-2 py-1 rounded text-sm {{ $discount->status == 'active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">{{ ucfirst($discount->status) }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.discounts.edit', $discount->id) }}" class="text-green-600 hover:text-green-800 mr-3"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.discounts.destroy', $discount->id) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Delete this discount?')"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="p-8 text-center text-gray-500"><i class="fas fa-percent text-4xl mb-2 block"></i>No discounts found</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-4">{{ $discounts->links() }}</div>
@endsection
