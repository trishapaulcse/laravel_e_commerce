<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PaymentGateway;
use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    public function index()
    {
        $gateways = PaymentGateway::all();
        return view('admin.payment-gateways.index', compact('gateways'));
    }

    public function edit($id)
    {
        $gateway = PaymentGateway::findOrFail($id);
        return view('admin.payment-gateways.edit', compact('gateway'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'api_key' => 'nullable|string',
            'api_secret' => 'nullable|string',
            'merchant_id' => 'nullable|string'
        ]);

        $gateway = PaymentGateway::findOrFail($id);
        $gateway->update($request->only(['api_key', 'api_secret', 'merchant_id', 'is_active', 'is_sandbox']));

        return redirect()->route('admin.payment-gateways.index')
            ->with('success', 'Payment gateway updated successfully');
    }
}
