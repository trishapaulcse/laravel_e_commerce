@extends('admin.layouts.app')
@section('title', 'Purchase Report')
@section('content')
<h1 class="text-3xl font-bold mb-6 text-gray-800"><i class="fas fa-chart-line mr-2"></i>Purchase Report</h1>
<div class="bg-white rounded-lg shadow-md p-6 mb-6">
    <form method="GET" class="flex gap-4 items-end">
        <div class="flex-1">
            <label class="block mb-2 font-semibold text-gray-700">From Date</label>
            <input type="date" name="from_date" class="w-full border rounded-lg px-3 py-2" value="{{ request('from_date') }}">
        </div>
        <div class="flex-1">
            <label class="block mb-2 font-semibold text-gray-700">To Date</label>
            <input type="date" name="to_date" class="w-full border rounded-lg px-3 py-2" value="{{ request('to_date') }}">
        </div>
        <div>
            <button type="submit" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-filter mr-2"></i>Filter</button>
        </div>
    </form>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <div class="bg-gradient-to-br from-green-500 to-green-600 rounded-lg shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-green-100 text-sm font-semibold mb-1">Total Revenue</p>
                <h3 class="text-3xl font-bold">৳{{ number_format($totalRevenue, 2) }}</h3>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-dollar-sign text-3xl"></i>
            </div>
        </div>
    </div>
    <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg shadow-lg p-6 text-white">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-blue-100 text-sm font-semibold mb-1">Total Orders</p>
                <h3 class="text-3xl font-bold">{{ $totalOrders }}</h3>
            </div>
            <div class="bg-white bg-opacity-20 rounded-full p-4">
                <i class="fas fa-shopping-cart text-3xl"></i>
            </div>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-4">
        <h2 class="text-xl font-bold"><i class="fas fa-trophy mr-2"></i>Top 10 Products</h2>
    </div>
    <table class="w-full">
        <thead class="bg-gray-100">
            <tr>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-box mr-2"></i>Product</th>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-shopping-bag mr-2"></i>Total Sold</th>
                <th class="text-left p-4 font-semibold text-gray-700"><i class="fas fa-dollar-sign mr-2"></i>Revenue</th>
            </tr>
        </thead>
        <tbody>
            @forelse($topProducts as $product)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-medium text-gray-800">{{ $product->title }}</span></td>
                <td class="p-4"><span class="px-3 py-1 bg-indigo-100 text-indigo-700 rounded-full font-semibold">{{ $product->total_sold }}</span></td>
                <td class="p-4"><span class="font-semibold text-green-600">৳{{ number_format($product->revenue, 2) }}</span></td>
            </tr>
            @empty
            <tr><td colspan="3" class="p-8 text-center text-gray-500"><i class="fas fa-box-open text-4xl mb-2 block"></i>No products data available</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
