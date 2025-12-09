<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $recentOrders = $user->orders()->latest()->take(5)->get();
        return view('user-panel.dashboard', compact('user', 'recentOrders'));
    }
}
