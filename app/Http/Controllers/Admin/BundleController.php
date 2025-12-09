<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bundle;
use App\Models\Product;
use Illuminate\Http\Request;

class BundleController extends Controller
{
    public function index()
    {
        $bundles = Bundle::paginate(15);
        return view('admin.bundles.index', compact('bundles'));
    }

    public function create()
    {
        $products = Product::where('status', 'active')->get();
        return view('admin.bundles.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'base_price' => 'required|numeric|min:0',
            'discount_amount' => 'required|numeric|min:0'
        ]);

        $finalPrice = $request->discount_type === 'percentage' 
            ? $request->base_price - ($request->base_price * $request->discount_amount / 100)
            : $request->base_price - $request->discount_amount;

        $bundle = Bundle::create([
            'name' => $request->name,
            'description' => $request->description,
            'base_price' => $request->base_price,
            'discount_type' => $request->discount_type,
            'discount_amount' => $request->discount_amount,
            'final_price' => $finalPrice,
            'status' => $request->status ?? 'active'
        ]);

        if ($request->products) {
            foreach ($request->products as $productId) {
                $bundle->items()->create([
                    'product_id' => $productId,
                    'quantity' => 1
                ]);
            }
        }

        return redirect()->route('admin.bundles.index')->with('success', 'Bundle created successfully');
    }

    public function edit($id)
    {
        $bundle = Bundle::with('items')->findOrFail($id);
        $products = Product::where('status', 'active')->get();
        return view('admin.bundles.edit', compact('bundle', 'products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'base_price' => 'required|numeric|min:0',
            'discount_amount' => 'required|numeric|min:0'
        ]);

        $finalPrice = $request->discount_type === 'percentage' 
            ? $request->base_price - ($request->base_price * $request->discount_amount / 100)
            : $request->base_price - $request->discount_amount;

        $bundle = Bundle::findOrFail($id);
        $bundle->update([
            'name' => $request->name,
            'description' => $request->description,
            'base_price' => $request->base_price,
            'discount_type' => $request->discount_type,
            'discount_amount' => $request->discount_amount,
            'final_price' => $finalPrice,
            'status' => $request->status ?? 'active'
        ]);

        $bundle->items()->delete();
        if ($request->products) {
            foreach ($request->products as $productId) {
                $bundle->items()->create([
                    'product_id' => $productId,
                    'quantity' => 1
                ]);
            }
        }

        return redirect()->route('admin.bundles.index')->with('success', 'Bundle updated successfully');
    }

    public function show($id)
    {
        $bundle = Bundle::with('items')->findOrFail($id);
        return view('admin.bundles.show', compact('bundle'));
    }

    public function destroy($id)
    {
        Bundle::findOrFail($id)->delete();
        return redirect()->route('admin.bundles.index')->with('success', 'Bundle deleted successfully');
    }
}
