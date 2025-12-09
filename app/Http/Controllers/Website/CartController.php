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
        $cart[$request->product_id] = [
            'quantity' => $request->quantity ?? 1,
            'price' => $request->price
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product removed from cart');
    }
}
