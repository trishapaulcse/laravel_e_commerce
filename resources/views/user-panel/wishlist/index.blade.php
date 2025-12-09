@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>My Wishlist</h2>
    <div class="row">
        @forelse($wishlists as $wishlist)
        <div class="col-md-3 mb-3">
            <div class="card">
                <img src="{{ asset($wishlist->product->images[0] ?? 'default.jpg') }}" class="card-img-top">
                <div class="card-body">
                    <h5>{{ $wishlist->product->title }}</h5>
                    <p>{{ $wishlist->product->selling_price }} BDT</p>
                    <a href="{{ route('products.show', $wishlist->product) }}" class="btn btn-primary btn-sm">View</a>
                    <form action="{{ route('user.wishlist.destroy', $wishlist) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger btn-sm">Remove</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <p>No items in wishlist</p>
        @endforelse
    </div>
</div>
@endsection
