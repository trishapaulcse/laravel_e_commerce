@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Add Coupon</h2>
    <form action="{{ route('admin.coupons.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Code</label>
            <input type="text" name="code" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control" required>
                <option value="fixed">Fixed</option>
                <option value="percentage">Percentage</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Value</label>
            <input type="number" name="value" class="form-control" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Min Order Amount</label>
            <input type="number" name="min_order_amount" class="form-control" step="0.01">
        </div>
        <div class="mb-3">
            <label>Max Discount</label>
            <input type="number" name="max_discount" class="form-control" step="0.01">
        </div>
        <div class="mb-3">
            <label>Usage Limit</label>
            <input type="number" name="usage_limit" class="form-control">
        </div>
        <div class="mb-3">
            <label>Valid Until</label>
            <input type="datetime-local" name="valid_until" class="form-control">
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
