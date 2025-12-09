@extends('user-panel.layouts.app')
@section('title', 'My Profile')
@section('content')
<h1 class="text-3xl font-bold text-gray-800 mb-6"><i class="fas fa-user-circle mr-2"></i>My Profile</h1>

<form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        <div class="lg:col-span-1">
            <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                @if(auth()->user()->avatar)
                <img src="{{ asset('storage/' . auth()->user()->avatar) }}" class="w-32 h-32 rounded-full mx-auto mb-4 object-cover border-4 border-blue-100">
                @else
                <div class="w-32 h-32 rounded-full mx-auto mb-4 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white text-4xl font-bold">{{ substr(auth()->user()->name, 0, 1) }}</div>
                @endif
                <h3 class="font-bold text-lg text-gray-800">{{ auth()->user()->name }}</h3>
                <p class="text-gray-500 text-sm mb-4">{{ auth()->user()->email }}</p>
                <label class="block">
                    <span class="sr-only">Choose avatar</span>
                    <input type="file" name="avatar" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                </label>
            </div>
        </div>

        <div class="lg:col-span-3 space-y-6">
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4"><i class="fas fa-info-circle mr-2"></i>Basic Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Name</label>
                        <input type="text" name="name" value="{{ auth()->user()->name }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" name="email" value="{{ auth()->user()->email }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Phone</label>
                        <input type="text" name="phone" value="{{ auth()->user()->phone }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Gender</label>
                        <select name="gender" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                            <option value="">Select</option>
                            <option value="male" {{ auth()->user()->gender == 'male' ? 'selected' : '' }}>Male</option>
                            <option value="female" {{ auth()->user()->gender == 'female' ? 'selected' : '' }}>Female</option>
                            <option value="other" {{ auth()->user()->gender == 'other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Date of Birth</label>
                        <input type="date" name="dob" value="{{ auth()->user()->dob }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4"><i class="fas fa-building mr-2"></i>Additional Information</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Company Name</label>
                        <input type="text" name="company_name" value="{{ auth()->user()->profile->company_name ?? '' }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Tax Number</label>
                        <input type="text" name="tax_number" value="{{ auth()->user()->profile->tax_number ?? '' }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-gray-700 font-semibold mb-2">Bio</label>
                        <textarea name="bio" rows="3" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">{{ auth()->user()->profile->bio ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4"><i class="fas fa-share-alt mr-2"></i>Social Media</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2"><i class="fab fa-facebook text-blue-600 mr-2"></i>Facebook</label>
                        <input type="url" name="facebook" value="{{ auth()->user()->profile->facebook ?? '' }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2"><i class="fab fa-twitter text-blue-400 mr-2"></i>Twitter</label>
                        <input type="url" name="twitter" value="{{ auth()->user()->profile->twitter ?? '' }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2"><i class="fab fa-instagram text-pink-600 mr-2"></i>Instagram</label>
                        <input type="url" name="instagram" value="{{ auth()->user()->profile->instagram ?? '' }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2"><i class="fab fa-linkedin text-blue-700 mr-2"></i>LinkedIn</label>
                        <input type="url" name="linkedin" value="{{ auth()->user()->profile->linkedin ?? '' }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2"><i class="fas fa-globe mr-2"></i>Website</label>
                        <input type="url" name="website" value="{{ auth()->user()->profile->website ?? '' }}" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4"><i class="fas fa-cog mr-2"></i>Preferences</h2>
                <div class="space-y-3">
                    <label class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 cursor-pointer">
                        <input type="checkbox" name="newsletter_subscribed" value="1" {{ auth()->user()->profile->newsletter_subscribed ?? false ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-gray-700 font-medium">Subscribe to Newsletter</span>
                    </label>
                    <label class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 cursor-pointer">
                        <input type="checkbox" name="sms_notifications" value="1" {{ auth()->user()->profile->sms_notifications ?? true ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-gray-700 font-medium">SMS Notifications</span>
                    </label>
                    <label class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 cursor-pointer">
                        <input type="checkbox" name="email_notifications" value="1" {{ auth()->user()->profile->email_notifications ?? true ? 'checked' : '' }} class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-500">
                        <span class="ml-3 text-gray-700 font-medium">Email Notifications</span>
                    </label>
                </div>
            </div>

            <div class="flex gap-3">
                <button type="submit" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-8 py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-save mr-2"></i>Update Profile</button>
                <a href="{{ route('user.dashboard') }}" class="bg-gray-500 text-white px-8 py-3 rounded-lg hover:bg-gray-600 transition font-semibold"><i class="fas fa-times mr-2"></i>Cancel</a>
            </div>
        </div>
    </div>
</form>
@endsection
