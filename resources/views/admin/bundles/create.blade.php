@extends('admin.layouts.app')
@section('title', 'Add Bundle')
@section('content')
<div class="mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-box mr-2"></i>Add Bundle</h1>
</div>
<div class="bg-white rounded-lg shadow-md p-6">
    <form action="{{ route('admin.bundles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-tag mr-2"></i>Name</label>
                <input type="text" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" required>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-dollar-sign mr-2"></i>Base Price</label>
                <input type="number" name="base_price" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" step="0.01" required>
            </div>
            <div class="md:col-span-2">
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-boxes mr-2"></i>Products</label>
                <select name="products[]" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" multiple required size="5">
                    @foreach($products as $product)
                    <option value="{{ $product->id }}">{{ $product->title }}</option>
                    @endforeach
                </select>
                <p class="text-sm text-gray-500 mt-1">Hold Ctrl/Cmd to select multiple products</p>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-percent mr-2"></i>Discount Type</label>
                <select name="discount_type" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    <option value="fixed">Fixed</option>
                    <option value="percentage">Percentage</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-money-bill mr-2"></i>Discount Amount</label>
                <input type="number" name="discount_amount" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent" step="0.01">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-image mr-2"></i>Image</label>
                <input type="file" name="image" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
            </div>
            <div>
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-toggle-on mr-2"></i>Status</label>
                <select name="status" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            <div class="md:col-span-2">
                <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-align-left mr-2"></i>Description</label>
                <textarea name="description" rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-500 focus:border-transparent"></textarea>
            </div>
        </div>
        <div class="flex gap-3 mt-6">
            <button type="submit" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-6 py-2 rounded-lg hover:shadow-lg transition"><i class="fas fa-save mr-2"></i>Save Bundle</button>
            <a href="{{ route('admin.bundles.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition"><i class="fas fa-times mr-2"></i>Cancel</a>
        </div>
    </form>
</div>
@endsection
