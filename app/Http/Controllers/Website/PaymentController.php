<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function process(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        
        $request->validate([
            'payment_method' => 'required|in:bkash,nagad,cod'
        ]);

        $result = $this->paymentService->processPayment(
            $order,
            $request->payment_method,
            $request->all()
        );

        if ($result['success']) {
            return redirect()->route('user.orders.show', $order->id)
                ->with('success', 'Payment processed successfully');
        }

        return redirect()->back()->with('error', $result['message']);
    }

    public function bkashCallback(Request $request)
    {
        // Handle bKash callback
        return redirect()->route('user.orders.index')
            ->with('success', 'bKash payment completed');
    }

    public function nagadCallback(Request $request)
    {
        // Handle Nagad callback
        return redirect()->route('user.orders.index')
            ->with('success', 'Nagad payment completed');
    }
}
