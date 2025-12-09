@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Edit Banner</h2>
    <form action="{{ route('admin.banners.update', $banner) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $banner->title }}" required>
        </div>
        <div class="mb-3">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset($banner->image) }}" width="200" class="mt-2">
        </div>
        <div class="mb-3">
            <label>Link</label>
            <input type="text" name="link" class="form-control" value="{{ $banner->link }}">
        </div>
        <div class="mb-3">
            <label>Position</label>
            <input type="number" name="position" class="form-control" value="{{ $banner->position }}">
        </div>
        <div class="mb-3">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="1" {{ $banner->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$banner->status ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
