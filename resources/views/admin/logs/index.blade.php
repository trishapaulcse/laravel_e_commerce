@extends('admin.layouts.app')
@section('title', 'Activity Logs')
@section('content')
<h1 class="text-3xl font-bold mb-6 text-gray-800"><i class="fas fa-history mr-2"></i>Activity Logs</h1>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-user mr-2"></i>User</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-bolt mr-2"></i>Action</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cube mr-2"></i>Model</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-edit mr-2"></i>Changes</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-clock mr-2"></i>Date</th>
            </tr>
        </thead>
        <tbody>
            @forelse($logs as $log)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-medium text-gray-800">{{ $log->user->name ?? 'System' }}</span></td>
                <td class="p-4"><span class="px-2 py-1 bg-blue-100 text-blue-700 rounded text-sm">{{ ucfirst($log->action) }}</span></td>
                <td class="p-4"><span class="text-gray-600">{{ class_basename($log->model_type) }}</span></td>
                <td class="p-4"><span class="text-sm text-gray-500 truncate max-w-xs block">{{ $log->changes }}</span></td>
                <td class="p-4"><span class="text-sm text-gray-500">{{ $log->created_at->format('M d, Y H:i') }}</span></td>
            </tr>
            @empty
            <tr><td colspan="5" class="p-8 text-center text-gray-500"><i class="fas fa-history text-4xl mb-2 block"></i>No activity logs yet</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="mt-4">{{ $logs->links() }}</div>
@endsection
