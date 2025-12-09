<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::paginate(15);
        return view('admin.brands.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status ?? 'active'
        ]);

        return redirect()->route('admin.brands.index')->with('success', 'Brand created successfully');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required|string|max:255']);

        Brand::findOrFail($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'status' => $request->status ?? 'active'
        ]);

        return redirect()->route('admin.brands.index')->with('success', 'Brand updated successfully');
    }

    public function destroy($id)
    {
        Brand::findOrFail($id)->delete();
        return redirect()->route('admin.brands.index')->with('success', 'Brand deleted successfully');
    }
}
