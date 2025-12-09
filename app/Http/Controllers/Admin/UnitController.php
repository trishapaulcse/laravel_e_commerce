<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::paginate(15);
        return view('admin.units.index', compact('units'));
    }

    public function create()
    {
        return view('admin.units.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_code' => 'required|string|max:10'
        ]);

        Unit::create($request->all());
        return redirect()->route('admin.units.index')->with('success', 'Unit created successfully');
    }

    public function edit($id)
    {
        $unit = Unit::findOrFail($id);
        return view('admin.units.edit', compact('unit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'short_code' => 'required|string|max:10'
        ]);

        Unit::findOrFail($id)->update($request->all());
        return redirect()->route('admin.units.index')->with('success', 'Unit updated successfully');
    }

    public function destroy($id)
    {
        Unit::findOrFail($id)->delete();
        return redirect()->route('admin.units.index')->with('success', 'Unit deleted successfully');
    }
}
