@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Edit Coupon</h2>
    <form action="{{ route('admin.coupons.update', $coupon) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Code</label>
            <input type="text" name="code" class="form-control" value="{{ $coupon->code }}" required>
        </div>
        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control" required>
                <option value="fixed" {{ $coupon->type == 'fixed' ? 'selected' : '' }}>Fixed</option>
                <option value="percentage" {{ $coupon->type == 'percentage' ? 'selected' : '' }}>Percentage</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Value</label>
            <input type="number" name="value" class="form-control" value="{{ $coupon->value }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Min Order Amount</label>
            <input type="number" name="min_order_amount" class="form-control" value="{{ $coupon->min_order_amount }}" step="0.01">
        </div>
        <div class="mb-3">
            <label>Max Discount</label>
            <input type="number" name="max_discount" class="form-control" value="{{ $coupon->max_discount }}" step="0.01">
        </div>
        <div class="mb-3">
            <label>Usage Limit</label>
            <input type="number" name="usage_limit" class="form-control" value="{{ $coupon->usage_limit }}">
        </div>
        <div class="mb-3">
            <label>Valid Until</label>
            <input type="datetime-local" name="valid_until" class="form-control" value="{{ $coupon->valid_until ? date('Y-m-d\TH:i', strtotime($coupon->valid_until)) : '' }}">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $coupon->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$coupon->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
