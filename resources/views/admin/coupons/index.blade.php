@extends('admin.layouts.app')
@section('title', 'Coupons')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-bold text-gray-800">Discount Coupons</h2>
    <a href="{{ route('admin.coupons.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg flex items-center transition">
        <i class="fas fa-plus mr-2"></i> Add Coupon
    </a>
</div>

<div class="bg-white rounded-xl shadow-lg overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50 border-b border-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Code</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Type</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Discount</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Min Order</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Valid Until</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Status</th>
                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($coupons as $coupon)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                    <span class="font-mono font-bold text-indigo-600 bg-indigo-50 px-3 py-1 rounded">{{ $coupon->code }}</span>
                </td>
                <td class="px-6 py-4 text-gray-600 capitalize">{{ $coupon->type }}</td>
                <td class="px-6 py-4 font-semibold text-gray-900">
                    {{ $coupon->value }}{{ $coupon->discount_type == 'percentage' ? '%' : '৳' }}
                </td>
                <td class="px-6 py-4 text-gray-600">
                    {{ $coupon->min_order_amount ? '৳' . number_format($coupon->min_order_amount, 2) : 'No minimum' }}
                </td>
                <td class="px-6 py-4 text-gray-600">
                    {{ $coupon->end_date ? \Carbon\Carbon::parse($coupon->end_date)->format('M d, Y') : 'No expiry' }}
                </td>
                <td class="px-6 py-4">
                    <span class="px-3 py-1 rounded-full text-xs font-medium {{ $coupon->status == 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                        {{ ucfirst($coupon->status) }}
                    </span>
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center space-x-3">
                        <a href="{{ route('admin.coupons.show', $coupon) }}" class="text-blue-600 hover:text-blue-800" title="View">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.coupons.edit', $coupon) }}" class="text-yellow-600 hover:text-yellow-800" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('admin.coupons.destroy', $coupon) }}" method="POST" class="inline">
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
                    <i class="fas fa-ticket-alt text-4xl mb-3 text-gray-300"></i>
                    <p>No coupons found. Create your first coupon!</p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $coupons->links() }}
</div>
@endsection
