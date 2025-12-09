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
        $totalRevenue = Order::sum('total');
        
        // Order Status Breakdown
        $pendingOrders = Order::where('status', 'pending')->count();
        $processingOrders = Order::where('status', 'processing')->count();
        $shippedOrders = Order::where('status', 'shipped')->count();
        $deliveredOrders = Order::where('status', 'delivered')->count();
        $cancelledOrders = Order::where('status', 'cancelled')->count();
        
        // Payment Method Breakdown
        $codOrders = Order::where('payment_method', 'cod')->count();
        $bkashOrders = Order::where('payment_method', 'bkash')->count();
        $nagadOrders = Order::where('payment_method', 'nagad')->count();
        $onlinePayments = $bkashOrders + $nagadOrders;
        
        $recentOrders = Order::with('user')->latest()->take(10)->get();
        
        return view('admin.dashboard', compact(
            'totalOrders', 'totalProducts', 'totalUsers', 'totalRevenue',
            'pendingOrders', 'processingOrders', 'shippedOrders', 'deliveredOrders', 'cancelledOrders',
            'codOrders', 'bkashOrders', 'nagadOrders', 'onlinePayments',
            'recentOrders'
        ));
    }
}
