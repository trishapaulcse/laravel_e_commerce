<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function purchaseReport(Request $request)
    {
        $query = Order::with('items')->where('status', 'delivered');

        if ($request->from_date) {
            $query->whereDate('created_at', '>=', $request->from_date);
        }
        if ($request->to_date) {
            $query->whereDate('created_at', '<=', $request->to_date);
        }

        $orders = $query->get();
        $totalRevenue = $orders->sum('total_amount');
        $totalOrders = $orders->count();

        $topProducts = DB::table('order_items')
            ->join('items', 'order_items.item_id', '=', 'items.id')
            ->select('items.title', DB::raw('SUM(order_items.quantity) as total_sold'), DB::raw('SUM(order_items.total_price) as revenue'))
            ->groupBy('items.id', 'items.title')
            ->orderBy('total_sold', 'desc')
            ->limit(10)
            ->get();

        return view('admin.reports.purchase', compact('orders', 'totalRevenue', 'totalOrders', 'topProducts'));
    }
}
