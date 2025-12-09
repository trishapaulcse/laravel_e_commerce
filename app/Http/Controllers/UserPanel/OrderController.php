<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = auth()->user()->orders()->latest()->paginate(10);
        return view('user-panel.orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = auth()->user()->orders()->with('items.product')->findOrFail($id);
        return view('user-panel.orders.show', compact('order'));
    }

    public function tracking($id)
    {
        $order = auth()->user()->orders()->with('trackings')->findOrFail($id);
        return view('user-panel.orders.tracking', compact('order'));
    }

    public function invoice($id)
    {
        $order = auth()->user()->orders()->with('items.product')->findOrFail($id);
        return view('user-panel.orders.invoice', compact('order'));
    }

    public function downloadInvoice($id)
    {
        $order = auth()->user()->orders()->with('items.product')->findOrFail($id);
        $pdf = \PDF::loadView('user-panel.orders.invoice-pdf', compact('order'));
        return $pdf->download('invoice-'.$order->id.'.pdf');
    }

    public function emailInvoice($id)
    {
        $order = auth()->user()->orders()->with('items.product')->findOrFail($id);
        \Mail::to(auth()->user()->email)->send(new \App\Mail\InvoiceMail($order));
        return redirect()->back()->with('success', 'Invoice sent to your email');
    }
}
