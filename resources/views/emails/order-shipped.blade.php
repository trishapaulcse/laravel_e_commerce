@component('mail::message')
# Order Shipped

Hello {{ $order->user->name }},

Your order #{{ $order->order_number }} has been shipped.

**Tracking Code:** {{ $order->tracking_code }}

@component('mail::button', ['url' => route('user.orders.tracking', $order->id)])
Track Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
