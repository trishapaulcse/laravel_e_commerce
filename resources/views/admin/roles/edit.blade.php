@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Edit Role</h2>
    <form action="{{ route('admin.roles.update', $role) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $role->name }}" required>
        </div>
        <div class="mb-3">
            <label>Permissions</label>
            @foreach($permissions as $permission)
            <div class="form-check">
                <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" class="form-check-input" {{ $role->permissions->contains($permission->id) ? 'checked' : '' }}>
                <label class="form-check-label">{{ $permission->name }}</label>
            </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
