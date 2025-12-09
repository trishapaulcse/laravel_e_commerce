<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('website.cart.index');
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        
        if(isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quantity'] += $request->quantity ?? 1;
        } else {
            $cart[$request->product_id] = [
                'quantity' => $request->quantity ?? 1,
                'price' => $request->price
            ];
        }
        
        session()->put('cart', $cart);
        $totalQty = array_sum(array_column($cart, 'quantity'));
        return response()->json(['success' => true, 'cart_count' => $totalQty]);
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product removed from cart');
    }
}
