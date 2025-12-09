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
            'phone' => 'nullable|string|max:20',
            'gender' => 'nullable|in:male,female,other',
            'dob' => 'nullable|date'
        ]);

        $user = auth()->user();
        $user->update($request->only('name', 'email', 'phone', 'gender', 'dob'));
        
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->update(['avatar' => $path]);
        }
        
        // Update or create profile
        $user->profile()->updateOrCreate(
            ['user_id' => $user->id],
            $request->only('bio', 'company_name', 'tax_number', 'facebook', 'twitter', 'instagram', 'linkedin', 'website', 'newsletter_subscribed', 'sms_notifications', 'email_notifications')
        );
        
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
