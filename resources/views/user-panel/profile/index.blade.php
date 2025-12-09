@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>My Profile</h2>
    <form action="{{ route('user.profile.update') }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ auth()->user()->phone }}">
        </div>
        <div class="mb-3">
            <label>Gender</label>
            <select name="gender" class="form-control">
                <option value="male" {{ auth()->user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ auth()->user()->gender == 'female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Date of Birth</label>
            <input type="date" name="dob" class="form-control" value="{{ auth()->user()->dob }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
