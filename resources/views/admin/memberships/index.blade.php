@extends('admin.layouts.app')
@section('title', 'Memberships')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-crown mr-2"></i>Memberships</h1>
    <a href="{{ route('admin.memberships.create') }}" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-4 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-plus mr-2"></i>Add</a>
</div>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-tag mr-2"></i>Name</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-dollar-sign mr-2"></i>Price</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-calendar mr-2"></i>Duration</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-toggle-on mr-2"></i>Status</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cog mr-2"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($memberships as $membership)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-medium text-gray-800">{{ $membership->name }}</span></td>
                <td class="p-4"><span class="font-semibold text-indigo-600">৳{{ number_format($membership->price, 2) }}</span></td>
                <td class="p-4"><span class="text-gray-600">{{ $membership->duration_days }} days</span></td>
                <td class="p-4"><span class="px-2 py-1 rounded text-sm {{ $membership->status == 'active' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">{{ ucfirst($membership->status) }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.memberships.edit', $membership->id) }}" class="text-green-600 hover:text-green-800"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="p-8 text-center text-gray-500"><i class="fas fa-crown text-4xl mb-2 block"></i>No memberships found</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
