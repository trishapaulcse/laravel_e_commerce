@extends('admin.layouts.app')
@section('title', 'Add Coupon')
@section('content')
<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-ticket-alt mr-2"></i>Add Coupon</h1>
</div>
<div class="bg-white rounded-lg shadow-md p-6">
    <form action="{{ route('admin.coupons.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-code mr-2"></i>Coupon Code</label>
                <input type="text" name="code" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" required>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-list mr-2"></i>Discount Type</label>
                <select name="discount_type" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" required>
                    <option value="fixed">Fixed Amount</option>
                    <option value="percentage">Percentage</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-dollar-sign mr-2"></i>Discount Value</label>
                <input type="number" name="value" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" step="0.01" required>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-shopping-cart mr-2"></i>Min Order Amount</label>
                <input type="number" name="min_order_amount" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" step="0.01">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-percentage mr-2"></i>Max Discount</label>
                <input type="number" name="max_discount" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" step="0.01">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-users mr-2"></i>Usage Per User</label>
                <input type="number" name="usage_per_user" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-calendar-alt mr-2"></i>Start Date</label>
                <input type="datetime-local" name="start_date" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-calendar-times mr-2"></i>End Date</label>
                <input type="datetime-local" name="end_date" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-toggle-on mr-2"></i>Status</label>
                <select name="status" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>
        <div class="flex gap-3 mt-6">
            <button type="submit" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-save mr-2"></i>Save Coupon</button>
            <a href="{{ route('admin.coupons.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition"><i class="fas fa-times mr-2"></i>Cancel</a>
        </div>
    </form>
</div>
@endsection
