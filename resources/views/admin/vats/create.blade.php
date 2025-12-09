@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Add VAT Rule</h2>
    <form action="{{ route('admin.vats.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control" required>
                <option value="percentage">Percentage</option>
                <option value="fixed">Fixed</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Value</label>
            <input type="number" name="value" class="form-control" step="0.01" required>
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
