@extends('user-panel.layouts.app')
@section('title', 'Membership Plans')
@section('content')
<h1 class="text-3xl font-bold text-gray-800 mb-6"><i class="fas fa-crown mr-2 text-yellow-500"></i>Membership Plans</h1>

@if(isset($userMembership))
<div class="bg-gradient-to-r from-yellow-400 to-yellow-500 rounded-xl shadow-lg p-6 mb-8 text-white">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold mb-2"><i class="fas fa-star mr-2"></i>Active Membership: {{ $userMembership->name }}</h2>
            <p class="text-yellow-100">Valid until: {{ $userMembership->pivot->end_date }}</p>
        </div>
        <i class="fas fa-crown text-6xl opacity-20"></i>
    </div>
</div>
@endif

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($memberships as $membership)
    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition {{ $membership->name == 'Premium' ? 'ring-4 ring-yellow-400' : '' }}">
        @if($membership->name == 'Premium')
        <div class="bg-gradient-to-r from-yellow-400 to-yellow-500 text-white text-center py-2 font-bold"><i class="fas fa-star mr-2"></i>MOST POPULAR</div>
        @endif
        <div class="p-6">
            <div class="text-center mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $membership->name }}</h3>
                <div class="text-4xl font-bold text-blue-600 mb-1">৳{{ number_format($membership->price, 0) }}</div>
                <p class="text-gray-500">{{ $membership->duration_days }} days</p>
            </div>
            <ul class="space-y-3 mb-6">
                @if($membership->free_delivery)
                <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-green-500 mr-3"></i>Free Delivery</li>
                @endif
                @if($membership->extra_discount)
                <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-green-500 mr-3"></i>{{ $membership->extra_discount }}% Extra Discount</li>
                @endif
                @if($membership->early_access)
                <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-green-500 mr-3"></i>Early Access to Sales</li>
                @endif
                @if($membership->cashback_percentage)
                <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-green-500 mr-3"></i>{{ $membership->cashback_percentage }}% Cashback</li>
                @endif
                @if($membership->priority_support)
                <li class="flex items-center text-gray-700"><i class="fas fa-check-circle text-green-500 mr-3"></i>Priority Support</li>
                @endif
            </ul>
            <form action="{{ route('user.memberships.purchase', $membership->id) }}" method="POST">
                @csrf
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-3 rounded-lg hover:shadow-lg transition font-semibold"><i class="fas fa-shopping-cart mr-2"></i>Purchase Now</button>
            </form>
        </div>
    </div>
    @endforeach
</div>
@endsection
