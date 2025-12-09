@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Customer Details - {{ $customer->name }}</h2>
    
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    @if($customer->avatar)
                    <img src="{{ asset('storage/' . $customer->avatar) }}" class="img-fluid rounded-circle mb-3" width="150">
                    @else
                    <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle mb-3">
                    @endif
                    <h5>{{ $customer->name }}</h5>
                    <p class="text-muted">{{ $customer->email }}</p>
                    <span class="badge bg-{{ $customer->status == 'active' ? 'success' : 'danger' }}">{{ $customer->status }}</span>
                </div>
            </div>
        </div>
        
        <div class="col-md-9">
            <div class="card mb-3">
                <div class="card-header"><h5>Basic Information</h5></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"><p><strong>Phone:</strong> {{ $customer->phone }}</p></div>
                        <div class="col-md-6"><p><strong>Gender:</strong> {{ $customer->gender }}</p></div>
                        <div class="col-md-6"><p><strong>Date of Birth:</strong> {{ $customer->dob }}</p></div>
                        <div class="col-md-6"><p><strong>Joined:</strong> {{ $customer->created_at->format('d M Y') }}</p></div>
                    </div>
                </div>
            </div>
            
            @if($customer->profile)
            <div class="card mb-3">
                <div class="card-header"><h5>Profile Information</h5></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"><p><strong>Company:</strong> {{ $customer->profile->company_name }}</p></div>
                        <div class="col-md-6"><p><strong>Tax Number:</strong> {{ $customer->profile->tax_number }}</p></div>
                        <div class="col-md-12"><p><strong>Bio:</strong> {{ $customer->profile->bio }}</p></div>
                        <div class="col-md-6"><p><strong>Total Orders:</strong> {{ $customer->profile->total_orders }}</p></div>
                        <div class="col-md-6"><p><strong>Total Spent:</strong> {{ $customer->profile->total_spent }} BDT</p></div>
                        <div class="col-md-6"><p><strong>Loyalty Points:</strong> {{ $customer->profile->loyalty_points }}</p></div>
                    </div>
                </div>
            </div>
            @endif
            
            <div class="card mb-3">
                <div class="card-header"><h5>Orders ({{ $customer->orders->count() }})</h5></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order #</th>
                                <th>Date</th>
                                <th>Total</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer->orders->take(5) as $order)
                            <tr>
                                <td>{{ $order->order_number }}</td>
                                <td>{{ $order->created_at->format('d M Y') }}</td>
                                <td>{{ $order->total_amount }} BDT</td>
                                <td><span class="badge bg-info">{{ $order->status }}</span></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="card mb-3">
                <div class="card-header"><h5>Addresses ({{ $customer->addresses->count() }})</h5></div>
                <div class="card-body">
                    @foreach($customer->addresses as $address)
                    <div class="mb-2">
                        <strong>{{ $address->type }}:</strong> {{ $address->address_line1 }}, {{ $address->city }}, {{ $address->postal_code }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
