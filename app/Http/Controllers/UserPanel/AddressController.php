<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        $addresses = auth()->user()->addresses;
        return view('user-panel.profile.addresses', compact('addresses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'address_line1' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string'
        ]);

        auth()->user()->addresses()->create($request->all());
        return redirect()->back()->with('success', 'Address added successfully');
    }

    public function destroy($id)
    {
        auth()->user()->addresses()->findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Address deleted successfully');
    }
}
