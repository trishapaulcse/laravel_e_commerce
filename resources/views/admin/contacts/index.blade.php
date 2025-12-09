@extends('admin.layouts.app')
@section('title', 'Contacts')
@section('content')
<h1 class="text-3xl font-bold mb-6 text-gray-800"><i class="fas fa-envelope mr-2"></i>Contact Messages</h1>
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white">
            <tr>
                <th class="text-left p-4 font-semibold"><i class="fas fa-user mr-2"></i>Name</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-envelope mr-2"></i>Email</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-tag mr-2"></i>Subject</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-clock mr-2"></i>Date</th>
                <th class="text-left p-4 font-semibold"><i class="fas fa-cog mr-2"></i>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($contacts as $contact)
            <tr class="border-b hover:bg-gray-50 transition">
                <td class="p-4"><span class="font-medium text-gray-800">{{ $contact->name }}</span></td>
                <td class="p-4"><span class="text-gray-600">{{ $contact->email }}</span></td>
                <td class="p-4"><span class="text-gray-700">{{ $contact->subject }}</span></td>
                <td class="p-4"><span class="text-sm text-gray-500">{{ $contact->created_at->format('M d, Y') }}</span></td>
                <td class="p-4">
                    <a href="{{ route('admin.contacts.show', $contact->id) }}" class="inline-flex items-center px-3 py-1 bg-indigo-100 text-indigo-700 rounded-lg hover:bg-indigo-200 transition"><i class="fas fa-eye mr-1"></i>View</a>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="p-8 text-center text-gray-500"><i class="fas fa-inbox text-4xl mb-2 block"></i>No contact messages yet</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
