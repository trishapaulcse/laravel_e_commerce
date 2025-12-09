@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <h2>Order Tracking - #{{ $order->order_number }}</h2>
    
    <div class="card mb-4">
        <div class="card-body">
            <h5>Add Tracking Update</h5>
            <form action="{{ route('admin.orders.tracking.store', $order) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <select name="status" class="form-control" required>
                            <option value="pending">Pending</option>
                            <option value="processing">Processing</option>
                            <option value="shipped">Shipped</option>
                            <option value="out_for_delivery">Out for Delivery</option>
                            <option value="delivered">Delivered</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="location" class="form-control" placeholder="Location">
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="description" class="form-control" placeholder="Description">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Add Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <h4>Tracking History</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Status</th>
                <th>Description</th>
                <th>Location</th>
                <th>Date & Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order->trackings()->orderBy('tracked_at', 'desc')->get() as $tracking)
            <tr>
                <td><span class="badge bg-info">{{ $tracking->status }}</span></td>
                <td>{{ $tracking->description }}</td>
                <td>{{ $tracking->location }}</td>
                <td>{{ $tracking->tracked_at->format('d M Y, h:i A') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
