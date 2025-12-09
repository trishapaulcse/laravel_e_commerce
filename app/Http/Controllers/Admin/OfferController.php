<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::paginate(15);
        return view('admin.offers.index', compact('offers'));
    }

    public function create()
    {
        return view('admin.offers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string'
        ]);

        Offer::create($request->all());
        return redirect()->route('admin.offers.index')->with('success', 'Offer created successfully');
    }

    public function edit($id)
    {
        $offer = Offer::findOrFail($id);
        return view('admin.offers.edit', compact('offer'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string'
        ]);

        Offer::findOrFail($id)->update($request->all());
        return redirect()->route('admin.offers.index')->with('success', 'Offer updated successfully');
    }

    public function destroy($id)
    {
        Offer::findOrFail($id)->delete();
        return redirect()->route('admin.offers.index')->with('success', 'Offer deleted successfully');
    }
}
