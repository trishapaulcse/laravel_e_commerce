<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create($orderId, $productId)
    {
        $order = auth()->user()->orders()->findOrFail($orderId);
        $product = $order->items()->where('product_id', $productId)->firstOrFail()->product;
        return view('user-panel.reviews.create', compact('order', 'product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'order_id' => 'required|exists:orders,id',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string'
        ]);

        Review::create([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id,
            'order_id' => $request->order_id,
            'rating' => $request->rating,
            'comment' => $request->comment
        ]);

        return redirect()->route('user.orders.show', $request->order_id)->with('success', 'Review submitted successfully');
    }
}
