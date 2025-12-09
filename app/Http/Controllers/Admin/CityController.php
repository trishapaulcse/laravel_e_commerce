<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::latest()->paginate(20);
        return view('admin.cities.index', compact('cities'));
    }

    public function create()
    {
        return view('admin.cities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'area_type' => 'required|in:inside,outside',
            'shipping_cost' => 'required|numeric|min:0'
        ]);

        City::create($request->all());
        return redirect()->route('admin.cities.index')->with('success', 'City created successfully');
    }

    public function edit(City $city)
    {
        return view('admin.cities.edit', compact('city'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'area_type' => 'required|in:inside,outside',
            'shipping_cost' => 'required|numeric|min:0'
        ]);

        $city->update($request->all());
        return redirect()->route('admin.cities.index')->with('success', 'City updated successfully');
    }

    public function destroy(City $city)
    {
        $city->delete();
        return redirect()->route('admin.cities.index')->with('success', 'City deleted successfully');
    }
}
