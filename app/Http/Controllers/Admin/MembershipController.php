<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = Membership::paginate(15);
        return view('admin.memberships.index', compact('memberships'));
    }

    public function create()
    {
        return view('admin.memberships.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'duration_days' => 'required|integer|min:1'
        ]);

        Membership::create($request->all());
        return redirect()->route('admin.memberships.index')->with('success', 'Membership created successfully');
    }

    public function edit($id)
    {
        $membership = Membership::findOrFail($id);
        return view('admin.memberships.edit', compact('membership'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'duration_days' => 'required|integer|min:1'
        ]);

        Membership::findOrFail($id)->update($request->all());
        return redirect()->route('admin.memberships.index')->with('success', 'Membership updated successfully');
    }

    public function destroy($id)
    {
        Membership::findOrFail($id)->delete();
        return redirect()->route('admin.memberships.index')->with('success', 'Membership deleted successfully');
    }
}
