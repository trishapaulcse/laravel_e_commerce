@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <h2>Roles</h2>
        <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">Add Role</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Permissions</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>{{ $role->permissions->count() }}</td>
                <td>
                    <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" class="d-inline">
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
