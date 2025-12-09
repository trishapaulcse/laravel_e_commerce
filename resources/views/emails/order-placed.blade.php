@component('mail::message')
# Order Placed Successfully

Hello {{ $order->user->name }},

Your order #{{ $order->order_number }} has been placed successfully.

**Order Details:**
- Total Amount: {{ $order->total_amount }} BDT
- Payment Method: {{ $order->payment_method }}
- Status: {{ $order->status }}

@component('mail::button', ['url' => route('user.orders.show', $order->id)])
View Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
