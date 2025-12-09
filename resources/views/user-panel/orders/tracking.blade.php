@extends('user-panel.layouts.app')
@section('content')
<div class="container">
    <h2>Order Tracking - #{{ $order->order_number }}</h2>
    <div class="timeline">
        @foreach($order->trackings()->orderBy('tracked_at', 'desc')->get() as $tracking)
        <div class="timeline-item mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>{{ $tracking->status }}</h5>
                    <p>{{ $tracking->description }}</p>
                    @if($tracking->location)
                    <p><strong>Location:</strong> {{ $tracking->location }}</p>
                    @endif
                    <small class="text-muted">{{ $tracking->tracked_at->format('d M Y, h:i A') }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
