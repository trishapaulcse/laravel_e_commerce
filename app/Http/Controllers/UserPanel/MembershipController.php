<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $memberships = Membership::where('status', 'active')->get();
        $userMembership = auth()->user()->memberships()->wherePivot('status', 'active')->first();
        return view('user-panel.membership.index', compact('memberships', 'userMembership'));
    }

    public function purchase(Request $request, $id)
    {
        $membership = Membership::findOrFail($id);
        
        auth()->user()->memberships()->attach($membership->id, [
            'start_date' => now(),
            'end_date' => now()->addDays($membership->duration_days),
            'status' => 'active'
        ]);

        return redirect()->back()->with('success', 'Membership purchased successfully');
    }
}
