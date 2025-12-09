@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Activity Logs</h2>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Action</th>
                <th>Model</th>
                <th>Changes</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($logs as $log)
            <tr>
                <td>{{ $log->user->name ?? 'System' }}</td>
                <td>{{ $log->action }}</td>
                <td>{{ $log->model_type }}</td>
                <td>{{ $log->changes }}</td>
                <td>{{ $log->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $logs->links() }}
</div>
@endsection
