@extends('admin.layouts.app')
@section('title', 'Offers')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-gift mr-2"></i>Offers</h1>
    <a href="{{ route('admin.offers.create') }}" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-plus mr-2"></i>Add Offer</a>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-heading mr-2"></i>Title</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-list mr-2"></i>Type</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-calendar-check mr-2"></i>Valid From</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-calendar-times mr-2"></i>Valid To</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-toggle-on mr-2"></i>Status</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cog mr-2"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($offers as $offer)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-medium text-gray-800">{{ $offer->title }}</span></td>
                <td class="p-4"><span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm">{{ ucfirst($offer->type) }}</span></td>
                <td class="p-4"><span class="text-sm text-gray-600">{{ $offer->valid_from }}</span></td>
                <td class="p-4"><span class="text-sm text-gray-600">{{ $offer->valid_to }}</span></td>
                <td class="p-4"><span class="px-2 py-1 rounded text-sm {{ $offer->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">{{ $offer->status ? 'Active' : 'Inactive' }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.offers.edit', $offer) }}" class="text-green-600 hover:text-green-800 mr-3"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.offers.destroy', $offer) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Delete this offer?')"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="6" class="p-8 text-center text-gray-500"><i class="fas fa-gift text-4xl mb-2 block"></i>No offers found</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
