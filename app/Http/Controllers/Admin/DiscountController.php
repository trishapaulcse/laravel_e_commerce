<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    public function index()
    {
        $discounts = Discount::paginate(15);
        return view('admin.discounts.index', compact('discounts'));
    }

    public function create()
    {
        return view('admin.discounts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:fixed,percentage',
            'value' => 'required|numeric|min:0',
            'applies_to' => 'required|in:item,category,bundle,cart'
        ]);

        Discount::create($request->all());
        return redirect()->route('admin.discounts.index')->with('success', 'Discount created successfully');
    }

    public function edit($id)
    {
        $discount = Discount::findOrFail($id);
        return view('admin.discounts.edit', compact('discount'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:fixed,percentage',
            'value' => 'required|numeric|min:0',
            'applies_to' => 'required|in:item,category,bundle,cart'
        ]);

        Discount::findOrFail($id)->update($request->all());
        return redirect()->route('admin.discounts.index')->with('success', 'Discount updated successfully');
    }

    public function destroy($id)
    {
        Discount::findOrFail($id)->delete();
        return redirect()->route('admin.discounts.index')->with('success', 'Discount deleted successfully');
    }
}
