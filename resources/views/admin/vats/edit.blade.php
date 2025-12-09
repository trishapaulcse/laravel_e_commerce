@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Edit VAT Rule</h2>
    <form action="{{ route('admin.vats.update', $vat) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $vat->name }}" required>
        </div>
        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control" required>
                <option value="percentage" {{ $vat->type == 'percentage' ? 'selected' : '' }}>Percentage</option>
                <option value="fixed" {{ $vat->type == 'fixed' ? 'selected' : '' }}>Fixed</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Value</label>
            <input type="number" name="value" class="form-control" value="{{ $vat->value }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $vat->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$vat->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
