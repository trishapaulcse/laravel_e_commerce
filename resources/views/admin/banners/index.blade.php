@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <h2>Banners</h2>
        <a href="{{ route('admin.banners.create') }}" class="btn btn-primary">Add Banner</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Position</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
            <tr>
                <td><img src="{{ asset($banner->image) }}" width="100"></td>
                <td>{{ $banner->title }}</td>
                <td>{{ $banner->position }}</td>
                <td>{{ $banner->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('admin.banners.edit', $banner) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.banners.destroy', $banner) }}" method="POST" class="d-inline">
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
