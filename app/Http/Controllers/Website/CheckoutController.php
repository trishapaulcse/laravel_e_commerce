<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $paymentGateways = \App\Models\PaymentGateway::where('is_active', true)->get();
        return view('website.checkout.index', compact('paymentGateways'));
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_amount' => $request->total_amount,
            'payment_method' => $request->payment_method,
            'status' => 'pending'
        ]);

        foreach (session('cart', []) as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }

        session()->forget('cart');
        return redirect()->route('user.orders.show', $order->id)->with('success', 'Order placed successfully');
    }
}
