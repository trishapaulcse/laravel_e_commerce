@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <h2>Coupons</h2>
        <a href="{{ route('admin.coupons.create') }}" class="btn btn-primary">Add Coupon</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Code</th>
                <th>Type</th>
                <th>Value</th>
                <th>Min Order</th>
                <th>Valid Until</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($coupons as $coupon)
            <tr>
                <td>{{ $coupon->code }}</td>
                <td>{{ $coupon->type }}</td>
                <td>{{ $coupon->value }}</td>
                <td>{{ $coupon->min_order_amount ?? 'N/A' }}</td>
                <td>{{ $coupon->valid_until ?? 'N/A' }}</td>
                <td>{{ $coupon->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('admin.coupons.edit', $coupon) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.coupons.destroy', $coupon) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $coupons->links() }}
</div>
@endsection
