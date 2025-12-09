@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Add Bundle</h2>
    <form action="{{ route('admin.bundles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Products</label>
            <select name="products[]" class="form-control" multiple required>
                @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Base Price</label>
            <input type="number" name="base_price" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Discount Type</label>
            <select name="discount_type" class="form-control">
                <option value="fixed">Fixed</option>
                <option value="percentage">Percentage</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Discount Amount</label>
            <input type="number" name="discount_amount" class="form-control" step="0.01">
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
