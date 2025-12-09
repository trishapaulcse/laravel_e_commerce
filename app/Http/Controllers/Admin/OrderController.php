<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::with('user')
            ->when($request->status, fn($q) => $q->where('status', $request->status))
            ->latest()
            ->paginate(15);
        return view('admin.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('items.product', 'user')->findOrFail($id);
        return view('admin.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => $request->status]);
        return redirect()->back()->with('success', 'Order status updated successfully');
    }

    public function tracking($id)
    {
        $order = Order::with('trackings')->findOrFail($id);
        return view('admin.orders.tracking', compact('order'));
    }

    public function invoice($id)
    {
        $order = Order::with('items.product', 'user')->findOrFail($id);
        return view('admin.orders.invoice', compact('order'));
    }

    public function downloadInvoice($id)
    {
        $order = Order::with('items.product', 'user')->findOrFail($id);
        $pdf = \PDF::loadView('admin.orders.invoice-pdf', compact('order'));
        return $pdf->download('invoice-'.$order->id.'.pdf');
    }

    public function emailInvoice($id)
    {
        $order = Order::with('items.product', 'user')->findOrFail($id);
        \Mail::to($order->user->email)->send(new \App\Mail\InvoiceMail($order));
        return redirect()->back()->with('success', 'Invoice sent to customer email');
    }
}
