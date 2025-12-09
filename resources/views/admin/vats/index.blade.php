@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <h2>VAT Rules</h2>
        <a href="{{ route('admin.vats.create') }}" class="btn btn-primary">Add VAT</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Value</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vats as $vat)
            <tr>
                <td>{{ $vat->name }}</td>
                <td>{{ $vat->type }}</td>
                <td>{{ $vat->value }}</td>
                <td>{{ $vat->status ? 'Active' : 'Inactive' }}</td>
                <td>
                    <a href="{{ route('admin.vats.edit', $vat) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('admin.vats.destroy', $vat) }}" method="POST" class="d-inline">
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
