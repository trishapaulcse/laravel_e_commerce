@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <h2>Offers</h2>
        <a href="{{ route('admin.offers.create') }}" class="btn btn-primary">Add Offer</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Valid From</th>
                <th>Valid To</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($offers as $offer)
            <tr>
                <td>{{ $offer->title }}</td>
                <td>{{ $offer->type }}</td>
                <td>{{ $offer->valid_from }}</td>
                <td>{{ $offer->valid_to }}</td>
                <td>{{ $offer->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('admin.offers.edit', $offer) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.offers.destroy', $offer) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
