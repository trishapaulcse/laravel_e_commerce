@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Add Offer</h2>
    <form action="{{ route('admin.offers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control" required>
                <option value="buy_x_get_y">Buy X Get Y</option>
                <option value="cart_discount">Cart Discount</option>
                <option value="membership_only">Membership Only</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Conditions (JSON)</label>
            <textarea name="conditions" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Valid From</label>
            <input type="datetime-local" name="valid_from" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Valid To</label>
            <input type="datetime-local" name="valid_to" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Banner Image</label>
            <input type="file" name="banner_image" class="form-control">
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
