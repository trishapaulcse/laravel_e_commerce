<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShippingMethod;
use Illuminate\Http\Request;

class ShippingMethodController extends Controller
{
    public function index()
    {
        $shippingMethods = ShippingMethod::paginate(15);
        return view('admin.shipping-methods.index', compact('shippingMethods'));
    }

    public function create()
    {
        return view('admin.shipping-methods.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cost' => 'required|numeric|min:0'
        ]);

        ShippingMethod::create($request->all());
        return redirect()->route('admin.shipping-methods.index')->with('success', 'Shipping method created successfully');
    }

    public function edit($id)
    {
        $shippingMethod = ShippingMethod::findOrFail($id);
        return view('admin.shipping-methods.edit', compact('shippingMethod'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'cost' => 'required|numeric|min:0'
        ]);

        ShippingMethod::findOrFail($id)->update($request->all());
        return redirect()->route('admin.shipping-methods.index')->with('success', 'Shipping method updated successfully');
    }

    public function destroy($id)
    {
        ShippingMethod::findOrFail($id)->delete();
        return redirect()->route('admin.shipping-methods.index')->with('success', 'Shipping method deleted successfully');
    }
}
