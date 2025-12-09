<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $cartItems = collect($cart)->map(function($item, $productId) {
            $product = \App\Models\Product::find($productId);
            return (object)['product' => $product, 'quantity' => $item['quantity'], 'price' => $item['price']];
        });
        $subtotal = $cartItems->sum(fn($item) => $item->price * $item->quantity);
        $shipping = 50;
        $total = $subtotal + $shipping;
        return view('website.checkout.index', compact('cartItems', 'subtotal', 'shipping', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'payment_method' => 'required|in:bkash,nagad,cod',
        ]);

        $cart = session()->get('cart', []);
        $subtotal = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
        $total = $subtotal + 50;

        // Auto-register if guest
        if (!auth()->check()) {
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                $password = $request->password ?? substr(md5(time()), 0, 8);
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($password),
                ]);
            }
            Auth::login($user);
        }

        $order = Order::create([
            'user_id' => auth()->id(),
            'total' => $total,
            'payment_method' => $request->payment_method,
            'status' => 'pending',
            'shipping_address' => $request->address . ', ' . $request->city,
        ]);

        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);
        }

        session()->forget('cart');
        return redirect()->route('user.orders.show', $order->id)->with('success', 'Order placed successfully');
    }
}
