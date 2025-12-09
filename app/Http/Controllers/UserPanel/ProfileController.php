<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('user-panel.profile.index');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'phone' => 'nullable|string|max:20'
        ]);

        auth()->user()->update($request->only('name', 'email', 'phone'));
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
