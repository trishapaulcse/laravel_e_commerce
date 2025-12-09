@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Edit Offer</h2>
    <form action="{{ route('admin.offers.update', $offer) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $offer->title }}" required>
        </div>
        <div class="mb-3">
            <label>Type</label>
            <select name="type" class="form-control" required>
                <option value="buy_x_get_y" {{ $offer->type == 'buy_x_get_y' ? 'selected' : '' }}>Buy X Get Y</option>
                <option value="cart_discount" {{ $offer->type == 'cart_discount' ? 'selected' : '' }}>Cart Discount</option>
                <option value="membership_only" {{ $offer->type == 'membership_only' ? 'selected' : '' }}>Membership Only</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Conditions (JSON)</label>
            <textarea name="conditions" class="form-control">{{ $offer->conditions }}</textarea>
        </div>
        <div class="mb-3">
            <label>Valid From</label>
            <input type="datetime-local" name="valid_from" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($offer->valid_from)) }}" required>
        </div>
        <div class="mb-3">
            <label>Valid To</label>
            <input type="datetime-local" name="valid_to" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($offer->valid_to)) }}" required>
        </div>
        <div class="mb-3">
            <label>Banner Image</label>
            <input type="file" name="banner_image" class="form-control">
            @if($offer->banner_image)
            <img src="{{ asset($offer->banner_image) }}" width="200" class="mt-2">
            @endif
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $offer->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$offer->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
