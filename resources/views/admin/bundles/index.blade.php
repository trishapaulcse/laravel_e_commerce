@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <h2>Bundles</h2>
        <a href="{{ route('admin.bundles.create') }}" class="btn btn-primary">Add Bundle</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Items</th>
                <th>Price</th>
                <th>Discount</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bundles as $bundle)
            <tr>
                <td>{{ $bundle->name }}</td>
                <td>{{ $bundle->items->count() }}</td>
                <td>{{ $bundle->base_price }}</td>
                <td>{{ $bundle->discount_amount }}</td>
                <td>{{ $bundle->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('admin.bundles.edit', $bundle) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.bundles.destroy', $bundle) }}" method="POST" class="d-inline">
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
