<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalOrders = Order::count();
        $totalProducts = Product::count();
        $totalUsers = User::whereDoesntHave('roles')->count();
        $totalRevenue = Order::where('status', 'completed')->sum('total');
        $recentOrders = Order::with('user')->latest()->take(10)->get();
        return view('admin.dashboard', compact('totalOrders', 'totalProducts', 'totalUsers', 'totalRevenue', 'recentOrders'));
    }
}
