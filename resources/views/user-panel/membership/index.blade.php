@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>Membership Plans</h2>
    
    @if($userMembership)
    <div class="alert alert-success mb-4">
        <h5>Active Membership: {{ $userMembership->name }}</h5>
        <p>Valid until: {{ $userMembership->pivot->end_date }}</p>
    </div>
    @endif

    <div class="row">
        @foreach($memberships as $membership)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4>{{ $membership->name }}</h4>
                    <h3>{{ $membership->price }} BDT</h3>
                    <p>Duration: {{ $membership->duration_days }} days</p>
                    <ul>
                        @if($membership->free_delivery)
                        <li>Free Delivery</li>
                        @endif
                        @if($membership->extra_discount)
                        <li>{{ $membership->extra_discount }}% Extra Discount</li>
                        @endif
                        @if($membership->cashback_percentage)
                        <li>{{ $membership->cashback_percentage }}% Cashback</li>
                        @endif
                    </ul>
                    <form action="{{ route('user.memberships.purchase', $membership->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-primary">Purchase</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
