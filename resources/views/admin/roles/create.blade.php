@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Add Role</h2>
    <form action="{{ route('admin.roles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Permissions</label>
            @foreach($permissions as $permission)
            <div class="form-check">
                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="form-check-input">
                <label class="form-check-label">{{ $permission->name }}</label>
            </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
