@extends('user-panel.layouts.app')
@section('title', 'My Addresses')
@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-bold text-gray-800"><i class="fas fa-map-marker-alt mr-2"></i>My Addresses</h1>
    <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="bg-gradient-to-r from-blue-600 to-blue-700 text-white px-6 py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-plus mr-2"></i>Add Address</button>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @forelse($addresses as $address)
    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="flex justify-between items-start mb-4">
            <div class="flex items-center">
                <div class="bg-blue-100 text-blue-600 p-3 rounded-full mr-3"><i class="fas fa-home text-xl"></i></div>
                <div>
                    <h3 class="font-bold text-gray-800">{{ ucfirst($address->type ?? 'Home') }}</h3>
                    @if($address->is_default)
                    <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded-full">Default</span>
                    @endif
                </div>
            </div>
            <form action="{{ route('user.addresses.destroy', $address->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Delete this address?')"><i class="fas fa-trash"></i></button>
            </form>
        </div>
        <div class="text-gray-600 space-y-1">
            <p>{{ $address->address_line1 }}</p>
            @if($address->address_line2)
            <p>{{ $address->address_line2 }}</p>
            @endif
            <p>{{ $address->city }}, {{ $address->state ?? '' }}</p>
            <p>{{ $address->postal_code }}, {{ $address->country ?? 'Bangladesh' }}</p>
        </div>
    </div>
    @empty
    <div class="col-span-full bg-white rounded-xl shadow-lg p-12 text-center">
        <i class="fas fa-map-marked-alt text-6xl text-gray-300 mb-4"></i>
        <h3 class="text-2xl font-bold text-gray-700 mb-2">No addresses saved</h3>
        <p class="text-gray-500">Add your first address to make checkout faster</p>
    </div>
    @endforelse
</div>

<div id="addModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white rounded-xl shadow-2xl p-8 max-w-2xl w-full mx-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800"><i class="fas fa-plus-circle mr-2"></i>Add New Address</h2>
            <button onclick="document.getElementById('addModal').classList.add('hidden')" class="text-gray-500 hover:text-gray-700"><i class="fas fa-times text-2xl"></i></button>
        </div>
        <form action="{{ route('user.addresses.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">Address Type</label>
                    <select name="type" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                        <option value="home">Home</option>
                        <option value="work">Work</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">Address Line 1</label>
                    <input type="text" name="address_line1" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="md:col-span-2">
                    <label class="block text-gray-700 font-semibold mb-2">Address Line 2</label>
                    <input type="text" name="address_line2" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">City</label>
                    <input type="text" name="city" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">State</label>
                    <input type="text" name="state" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Postal Code</label>
                    <input type="text" name="postal_code" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Country</label>
                    <input type="text" name="country" value="Bangladesh" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="md:col-span-2">
                    <label class="flex items-center">
                        <input type="checkbox" name="is_default" value="1" class="w-5 h-5 text-blue-600 rounded focus:ring-2 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700 font-medium">Set as default address</span>
                    </label>
                </div>
            </div>
            <div class="flex gap-3 mt-6">
                <button type="submit" class="flex-1 bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-save mr-2"></i>Save Address</button>
                <button type="button" onclick="document.getElementById('addModal').classList.add('hidden')" class="px-6 bg-gray-500 text-white py-3 rounded-lg hover:bg-gray-600 transition font-semibold">Cancel</button>
            </div>
        </form>
    </div>
</div>
@endsection
