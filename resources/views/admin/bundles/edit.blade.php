@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Edit Bundle</h2>
    <form action="{{ route('admin.bundles.update', $bundle) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $bundle->name }}" required>
        </div>
        <div class="mb-3">
            <label>Products</label>
            <select name="products[]" class="form-control" multiple required>
                @foreach($products as $product)
                <option value="{{ $product->id }}" {{ $bundle->items->contains($product->id) ? 'selected' : '' }}>{{ $product->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label>Base Price</label>
            <input type="number" name="base_price" class="form-control" value="{{ $bundle->base_price }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Discount Type</label>
            <select name="discount_type" class="form-control">
                <option value="fixed" {{ $bundle->discount_type == 'fixed' ? 'selected' : '' }}>Fixed</option>
                <option value="percentage" {{ $bundle->discount_type == 'percentage' ? 'selected' : '' }}>Percentage</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Discount Amount</label>
            <input type="number" name="discount_amount" class="form-control" value="{{ $bundle->discount_amount }}" step="0.01">
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            @if($bundle->image)
            <img src="{{ asset($bundle->image) }}" width="200" class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control">{{ $bundle->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $bundle->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$bundle->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
