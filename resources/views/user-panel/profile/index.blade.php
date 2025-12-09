@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>My Profile</h2>
    <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        
        <div class="row">
            <div class="col-md-3 text-center">
                @if(auth()->user()->avatar)
                <img src="{{ asset('storage/' . auth()->user()->avatar) }}" class="img-fluid rounded-circle mb-3" width="150">
                @else
                <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle mb-3">
                @endif
                <div class="mb-3">
                    <label>Avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
            </div>
            
            <div class="col-md-9">
                <h4>Basic Information</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" class="form-control" value="{{ auth()->user()->phone }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select</option>
                            <option value="male" {{ auth()->user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ auth()->user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ auth()->user()->gender == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="{{ auth()->user()->dob }}">
                    </div>
                </div>
                
                <h4 class="mt-4">Additional Information</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Company Name</label>
                        <input type="text" name="company_name" class="form-control" value="{{ auth()->user()->profile->company_name ?? '' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Tax Number</label>
                        <input type="text" name="tax_number" class="form-control" value="{{ auth()->user()->profile->tax_number ?? '' }}">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label>Bio</label>
                        <textarea name="bio" class="form-control" rows="3">{{ auth()->user()->profile->bio ?? '' }}</textarea>
                    </div>
                </div>
                
                <h4 class="mt-4">Social Media</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Facebook</label>
                        <input type="url" name="facebook" class="form-control" value="{{ auth()->user()->profile->facebook ?? '' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Twitter</label>
                        <input type="url" name="twitter" class="form-control" value="{{ auth()->user()->profile->twitter ?? '' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Instagram</label>
                        <input type="url" name="instagram" class="form-control" value="{{ auth()->user()->profile->instagram ?? '' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>LinkedIn</label>
                        <input type="url" name="linkedin" class="form-control" value="{{ auth()->user()->profile->linkedin ?? '' }}">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Website</label>
                        <input type="url" name="website" class="form-control" value="{{ auth()->user()->profile->website ?? '' }}">
                    </div>
                </div>
                
                <h4 class="mt-4">Preferences</h4>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="form-check">
                            <input type="checkbox" name="newsletter_subscribed" class="form-check-input" value="1" {{ auth()->user()->profile->newsletter_subscribed ?? false ? 'checked' : '' }}>
                            <label class="form-check-label">Subscribe to Newsletter</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-check">
                            <input type="checkbox" name="sms_notifications" class="form-check-input" value="1" {{ auth()->user()->profile->sms_notifications ?? true ? 'checked' : '' }}>
                            <label class="form-check-label">SMS Notifications</label>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-check">
                            <input type="checkbox" name="email_notifications" class="form-check-input" value="1" {{ auth()->user()->profile->email_notifications ?? true ? 'checked' : '' }}>
                            <label class="form-check-label">Email Notifications</label>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Update Profile</button>
            </div>
        </div>
    </form>
</div>
@endsection
