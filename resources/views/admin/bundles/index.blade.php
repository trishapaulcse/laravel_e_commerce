@extends('admin.layouts.app')
@section('title', 'Bundles')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Product Bundles</h2>
    <a href="{{ route('admin.bundles.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg flex items-center transition">
        <i class="fas fa-plus mr-2"></i> Add Bundle
    </a>
</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Name</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Items</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Base Price</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Discount</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Final Price</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($bundles as $bundle)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4 font-medium text-gray-900">{{ $bundle->name }}</td>
                <td class="px-6 py-4 text-gray-600">{{ $bundle->items->count() }} items</td>
                <td class="px-6 py-4 text-gray-900">৳{{ number_format($bundle->base_price, 2) }}</td>
                <td class="px-6 py-4 text-gray-600">{{ $bundle->discount_amount }}{{ $bundle->discount_type == 'percentage' ? '%' : '৳' }}</td>
                <td class="px-6 py-4 font-semibold text-green-600">৳{{ number_format($bundle->final_price, 2) }}</td>
                <td class="px-6 py-4">
                    <span class="px-3 py-1 rounded-full text-xs font-medium {{ $bundle->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ ucfirst($bundle->status) }}
                    </span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('admin.bundles.show', $bundle) }}" class="text-blue-600 hover:text-blue-800" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.bundles.edit', $bundle) }}" class="text-yellow-600 hover:text-yellow-800" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.bundles.destroy', $bundle) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')" title="Delete">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="px-6 py-12 text-center text-gray-500">
                    <i class="fas fa-boxes text-4xl mb-3 text-gray-300"></i>
                    <p>No bundles found. Create your first bundle!</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $bundles->links() }}
</div>
@endsection
