@extends('admin.layouts.app')
@section('title', 'Banners')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-image mr-2"></i>Banners</h1>
    <a href="{{ route('admin.banners.create') }}" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-plus mr-2"></i>Add Banner</a>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-image mr-2"></i>Image</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-heading mr-2"></i>Title</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-map-marker mr-2"></i>Position</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-toggle-on mr-2"></i>Status</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cog mr-2"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($banners as $banner)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><img src="{{ asset($banner->image) }}" class="w-24 h-16 object-cover rounded" alt="Banner"></td>
                <td class="p-4"><span class="font-medium text-gray-800">{{ $banner->title }}</span></td>
                <td class="p-4"><span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm">{{ ucfirst($banner->position) }}</span></td>
                <td class="p-4"><span class="px-2 py-1 rounded text-sm {{ $banner->status ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">{{ $banner->status ? 'Active' : 'Inactive' }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.banners.edit', $banner) }}" class="text-green-600 hover:text-green-800 mr-3"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Delete this banner?')"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="p-8 text-center text-gray-500"><i class="fas fa-image text-4xl mb-2 block"></i>No banners found</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
