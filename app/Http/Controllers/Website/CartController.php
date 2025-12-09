<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Bundle;
use App\Models\Setting;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $cartItems = $this->getCartItems($cart);
        $calculations = $this->calculateCart($cartItems);
        
        return view('website.cart.index', compact('cartItems', 'calculations'));
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        $type = $request->type ?? 'product'; // product or bundle
        $id = $request->product_id ?? $request->bundle_id;
        
        if(isset($cart[$type.'_'.$id])) {
            $cart[$type.'_'.$id]['quantity'] += $request->quantity ?? 1;
        } else {
            $cart[$type.'_'.$id] = [
                'type' => $type,
                'id' => $id,
                'quantity' => $request->quantity ?? 1
            ];
        }
        
        session()->put('cart', $cart);
        $totalQty = array_sum(array_column($cart, 'quantity'));
        return response()->json(['success' => true, 'cart_count' => $totalQty]);
    }

    public function update($id, Request $request)
    {
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }
        return redirect()->back()->with('success', 'Cart updated');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product removed from cart');
    }

    private function getCartItems($cart)
    {
        return collect($cart)->map(function($item, $key) {
            $type = $item['type'] ?? 'product';
            $id = $item['id'] ?? $key;
            
            if($type === 'bundle') {
                $bundle = Bundle::with('products')->find($id);
                if(!$bundle) return null;
                return [
                    'key' => $key,
                    'type' => 'bundle',
                    'item' => $bundle,
                    'quantity' => $item['quantity'] ?? 1,
                    'price' => $bundle->final_price ?? $bundle->base_price,
                    'discount' => $bundle->discount_amount ?? 0
                ];
            } else {
                $product = Product::find($id);
                if(!$product) return null;
                $price = $product->price;
                $discount = $this->calculateDiscount($product);
                return [
                    'key' => $key,
                    'type' => 'product',
                    'item' => $product,
                    'quantity' => $item['quantity'] ?? 1,
                    'price' => $price,
                    'discount' => $discount
                ];
            }
        })->filter();
    }

    private function calculateDiscount($product)
    {
        if($product->discount_type === 'percentage') {
            return ($product->price * $product->discount_value) / 100;
        } elseif($product->discount_type === 'fixed') {
            return $product->discount_value;
        }
        return 0;
    }

    private function calculateCart($cartItems)
    {
        $subtotal = 0;
        $totalDiscount = 0;
        
        foreach($cartItems as $item) {
            $itemTotal = $item['price'] * $item['quantity'];
            $itemDiscount = $item['discount'] * $item['quantity'];
            $subtotal += $itemTotal;
            $totalDiscount += $itemDiscount;
        }
        
        $afterDiscount = $subtotal - $totalDiscount;
        $vat = $this->calculateVAT($afterDiscount);
        $total = $afterDiscount + $vat;
        
        return [
            'subtotal' => $subtotal,
            'discount' => $totalDiscount,
            'vat' => $vat,
            'total' => $total
        ];
    }

    private function calculateVAT($amount)
    {
        $vatPercentage = Setting::get('vat_percentage', 0);
        return ($amount * $vatPercentage) / 100;
    }
}
