@extends('admin.layouts.app')
@section('title', 'Contacts')
@section('content')
<h1 class="text-3xl font-bold mb-6">Contact Messages</h1>
<div class="bg-white rounded shadow">
    <table class="w-full">
        <thead>
            <tr class="border-b">
                <th class="text-left p-4">Name</th>
                <th class="text-left p-4">Email</th>
                <th class="text-left p-4">Subject</th>
                <th class="text-left p-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr class="border-b">
                <td class="p-4">{{ $contact->name }}</td>
                <td class="p-4">{{ $contact->email }}</td>
                <td class="p-4">{{ $contact->subject }}</td>
                <td class="p-4">
                    <a href="{{ route('admin.contacts.show', $contact->id) }}" class="text-blue-600">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
