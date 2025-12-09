@extends('admin.layouts.app')
@section('title', 'Contact Message')
@section('content')
<h1 class="text-3xl font-bold mb-6">Contact Message</h1>
<div class="bg-white p-6 rounded shadow">
    <p><strong>Name:</strong> {{ $contact->name }}</p>
    <p><strong>Email:</strong> {{ $contact->email }}</p>
    <p><strong>Subject:</strong> {{ $contact->subject }}</p>
    <p><strong>Message:</strong> {{ $contact->message }}</p>
</div>
@endsection
