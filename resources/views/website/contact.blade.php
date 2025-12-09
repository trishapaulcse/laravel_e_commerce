@extends('website.layouts.app')
@section('content')
<div class="container my-5">
    <h1>Contact Us</h1>
    <div class="row mt-4">
        <div class="col-md-6">
            <form action="{{ route('website.contact.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Subject</label>
                    <input type="text" name="subject" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Message</label>
                    <textarea name="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <div class="col-md-6">
            <h4>Get in Touch</h4>
            <p><strong>Email:</strong> {{ Setting::get('company_email', 'info@example.com') }}</p>
            <p><strong>Phone:</strong> {{ Setting::get('company_phone', '+880 1234567890') }}</p>
            <p><strong>Address:</strong> {{ Setting::get('company_address', 'Dhaka, Bangladesh') }}</p>
        </div>
    </div>
</div>
@endsection
