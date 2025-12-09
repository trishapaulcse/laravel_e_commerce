@extends('website.layouts.app')
@section('title', 'Contact Us')
@section('content')
<div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl">We'd love to hear from you</p>
    </div>
</div>

<div class="container mx-auto px-4 py-16">
    <div class="grid md:grid-cols-2 gap-12">
        <div>
            <h2 class="text-2xl font-bold mb-6">Send us a Message</h2>
            <form action="{{ route('website.contact.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold mb-2">Name</label>
                    <input type="text" name="name" required class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Email</label>
                    <input type="email" name="email" required class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Subject</label>
                    <input type="text" name="subject" required class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Message</label>
                    <textarea name="message" rows="5" required class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
                </div>
                <button type="submit" class="bg-indigo-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-indigo-700 w-full">
                    <i class="fas fa-paper-plane mr-2"></i>Send Message
                </button>
            </form>
        </div>
        
        <div>
            <h2 class="text-2xl font-bold mb-6">Get in Touch</h2>
            <div class="space-y-6">
                <div class="flex items-start">
                    <div class="bg-indigo-100 p-4 rounded-lg mr-4">
                        <i class="fas fa-map-marker-alt text-2xl text-indigo-600"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Address</h3>
                        <p class="text-gray-600">Dhaka, Bangladesh</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="bg-indigo-100 p-4 rounded-lg mr-4">
                        <i class="fas fa-phone text-2xl text-indigo-600"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Phone</h3>
                        <p class="text-gray-600">+880 1234-567890</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="bg-indigo-100 p-4 rounded-lg mr-4">
                        <i class="fas fa-envelope text-2xl text-indigo-600"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Email</h3>
                        <p class="text-gray-600">support@bookstore.com</p>
                    </div>
                </div>
                
                <div class="flex items-start">
                    <div class="bg-indigo-100 p-4 rounded-lg mr-4">
                        <i class="fas fa-clock text-2xl text-indigo-600"></i>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-1">Working Hours</h3>
                        <p class="text-gray-600">Mon - Sat: 9:00 AM - 6:00 PM</p>
                        <p class="text-gray-600">Sunday: Closed</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-8">
                <h3 class="font-semibold text-lg mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="#" class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-indigo-700">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-indigo-700">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-indigo-700">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="bg-indigo-600 text-white w-12 h-12 rounded-full flex items-center justify-center hover:bg-indigo-700">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
