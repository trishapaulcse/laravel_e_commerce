@extends('admin.layouts.app')
@section('title', 'Roles & Permissions')
@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h2 class="text-2xl font-bold text-gray-800">Roles & Permissions</h2>
        <p class="text-gray-600 text-sm mt-1">Manage user roles and their permissions</p>
    </div>
    <a href="{{ route('admin.roles.create') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg flex items-center transition">
        <i class="fas fa-plus mr-2"></i> Add Role
    </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @forelse($roles as $role)
    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
        <div class="flex items-start justify-between mb-4">
            <div class="flex items-center">
                <div class="bg-indigo-100 rounded-full p-3 mr-3">
                    <i class="fas fa-user-shield text-indigo-600 text-xl"></i>
                </div>
                <div>
                    <h3 class="text-lg font-bold text-gray-800">{{ $role->name }}</h3>
                    <p class="text-sm text-gray-500">{{ $role->users->count() ?? 0 }} users</p>
                </div>
            </div>
        </div>
        
        <div class="mb-4">
            <p class="text-sm text-gray-600 mb-2">Permissions:</p>
            <div class="flex flex-wrap gap-2">
                @forelse($role->permissions->take(3) as $permission)
                <span class="px-2 py-1 bg-blue-50 text-blue-700 rounded text-xs">{{ $permission->name }}</span>
                @empty
                <span class="text-xs text-gray-400">No permissions</span>
                @endforelse
                @if($role->permissions->count() > 3)
                <span class="px-2 py-1 bg-gray-100 text-gray-600 rounded text-xs">+{{ $role->permissions->count() - 3 }} more</span>
                @endif
            </div>
        </div>

        <div class="flex items-center space-x-2 pt-4 border-t border-gray-200">
            <a href="{{ route('admin.roles.show', $role) }}" class="flex-1 text-center bg-blue-50 hover:bg-blue-100 text-blue-600 px-3 py-2 rounded-lg text-sm font-medium transition">
                <i class="fas fa-eye mr-1"></i> View
            </a>
            <a href="{{ route('admin.roles.edit', $role) }}" class="flex-1 text-center bg-yellow-50 hover:bg-yellow-100 text-yellow-600 px-3 py-2 rounded-lg text-sm font-medium transition">
                <i class="fas fa-edit mr-1"></i> Edit
            </a>
            <form action="{{ route('admin.roles.destroy', $role) }}" method="POST" class="flex-1">
                @csrf @method('DELETE')
                <button type="submit" class="w-full bg-red-50 hover:bg-red-100 text-red-600 px-3 py-2 rounded-lg text-sm font-medium transition" onclick="return confirm('Are you sure?')">
                    <i class="fas fa-trash mr-1"></i> Delete
                </button>
            </form>
        </div>
    </div>
    @empty
    <div class="col-span-3 bg-white rounded-xl shadow-lg p-12 text-center">
        <i class="fas fa-user-shield text-6xl mb-4 text-gray-300"></i>
        <p class="text-gray-500 mb-4">No roles found. Create your first role!</p>
        <a href="{{ route('admin.roles.create') }}" class="inline-block bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-3 rounded-lg transition">
            <i class="fas fa-plus mr-2"></i> Create Role
        </a>
    </div>
    @endforelse
</div>

<div class="mt-6">
    {{ $roles->links() }}
</div>
@endsection
