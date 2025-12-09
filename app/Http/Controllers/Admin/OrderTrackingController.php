<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderTracking;
use Illuminate\Http\Request;

class OrderTrackingController extends Controller
{
    public function store(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|string',
            'description' => 'nullable|string',
            'location' => 'nullable|string'
        ]);

        OrderTracking::create([
            'order_id' => $order->id,
            'status' => $request->status,
            'description' => $request->description,
            'location' => $request->location,
            'tracked_at' => now()
        ]);

        $order->update(['status' => $request->status]);

        return back()->with('success', 'Tracking updated');
    }
}
