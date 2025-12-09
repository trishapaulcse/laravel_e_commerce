<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vat;
use Illuminate\Http\Request;

class VatController extends Controller
{
    public function index()
    {
        $vats = Vat::orderBy('priority')->paginate(15);
        return view('admin.vats.index', compact('vats'));
    }

    public function create()
    {
        return view('admin.vats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:percentage,fixed',
            'value' => 'required|numeric|min:0',
            'applies_to' => 'required|in:all,category,item'
        ]);

        Vat::create($request->all());
        return redirect()->route('admin.vats.index')->with('success', 'VAT created successfully');
    }

    public function edit($id)
    {
        $vat = Vat::findOrFail($id);
        return view('admin.vats.edit', compact('vat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:percentage,fixed',
            'value' => 'required|numeric|min:0',
            'applies_to' => 'required|in:all,category,item'
        ]);

        Vat::findOrFail($id)->update($request->all());
        return redirect()->route('admin.vats.index')->with('success', 'VAT updated successfully');
    }

    public function destroy($id)
    {
        Vat::findOrFail($id)->delete();
        return redirect()->route('admin.vats.index')->with('success', 'VAT deleted successfully');
    }
}
