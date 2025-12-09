<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use App\Models\Product;
use App\Models\Bundle;
use App\Models\Coupon;
use App\Models\Setting;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        $cartItems = $this->getCartItems($cart);
        $cities = City::where('status', 1)->get();
        $calculations = $this->calculateCheckout($cartItems);
        
        $paymentMethods = [
            'bkash' => Setting::get('payment_bkash_active', 1),
            'nagad' => Setting::get('payment_nagad_active', 1),
            'cod' => Setting::get('payment_cod_active', 1),
        ];
        
        return view('website.checkout.index', compact('cartItems', 'calculations', 'cities', 'paymentMethods'));
    }

    public function applyCoupon(Request $request)
    {
        $request->validate(['coupon_code' => 'required|string']);
        
        $coupon = Coupon::where('code', $request->coupon_code)
            ->where('status', 'active')
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now())
            ->first();
        
        if(!$coupon) {
            return back()->with('error', 'Invalid or expired coupon');
        }
        
        $cart = session()->get('cart', []);
        $cartItems = $this->getCartItems($cart);
        $calculations = $this->calculateCheckout($cartItems);
        
        if($calculations['subtotal'] < $coupon->min_order_amount) {
            return back()->with('error', 'Minimum order amount not met');
        }
        
        session()->put('coupon', $coupon->code);
        return back()->with('success', 'Coupon applied successfully');
    }

    public function removeCoupon()
    {
        session()->forget('coupon');
        return back()->with('success', 'Coupon removed');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'city_id' => 'required|exists:cities,id',
            'payment_method' => 'required|in:bkash,nagad,cod',
        ]);

        session()->put('selected_city_id', $request->city_id);

        $cart = session()->get('cart', []);
        $cartItems = $this->getCartItems($cart);
        $calculations = $this->calculateCheckout($cartItems);

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

        $city = City::find($request->city_id);
        $order = Order::create([
            'user_id' => auth()->id(),
            'subtotal' => $calculations['subtotal'],
            'discount' => $calculations['discount'],
            'vat' => $calculations['vat'],
            'coupon_discount' => $calculations['coupon_discount'],
            'shipping' => $calculations['shipping'],
            'total' => $calculations['total'],
            'payment_method' => $request->payment_method,
            'status' => 'pending',
            'shipping_address' => $request->address . ', ' . $city->name,
            'coupon_code' => session()->get('coupon'),
        ]);

        session()->forget('selected_city_id');

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['type'] === 'product' ? $item['item']->id : null,
                'bundle_id' => $item['type'] === 'bundle' ? $item['item']->id : null,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'discount' => $item['discount']
            ]);
        }

        session()->forget(['cart', 'coupon']);
        return redirect()->route('user.orders.show', $order->id)->with('success', 'Order placed successfully');
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

    private function calculateCheckout($cartItems)
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
        
        // Apply coupon
        $couponDiscount = 0;
        $couponCode = session()->get('coupon');
        if($couponCode) {
            $coupon = Coupon::where('code', $couponCode)->where('status', 'active')->first();
            if($coupon) {
                if($coupon->discount_type === 'percentage') {
                    $couponDiscount = ($afterDiscount * $coupon->value) / 100;
                } elseif($coupon->discount_type === 'fixed') {
                    $couponDiscount = $coupon->value;
                }
                if($coupon->max_discount && $couponDiscount > $coupon->max_discount) {
                    $couponDiscount = $coupon->max_discount;
                }
            }
        }
        
        $afterCoupon = $afterDiscount - $couponDiscount;
        $vat = $this->calculateVAT($afterCoupon);
        $cityId = session()->get('selected_city_id');
        $shipping = $this->getShippingCost($cityId);
        $total = $afterCoupon + $vat + $shipping;
        
        return [
            'subtotal' => $subtotal,
            'discount' => $totalDiscount,
            'coupon_discount' => $couponDiscount,
            'vat' => $vat,
            'shipping' => $shipping,
            'total' => $total
        ];
    }

    private function calculateVAT($amount)
    {
        $vatPercentage = Setting::get('vat_percentage', 0);
        return ($amount * $vatPercentage) / 100;
    }

    private function getShippingCost($cityId = null)
    {
        if($cityId) {
            $city = City::find($cityId);
            if($city) return $city->shipping_cost;
        }
        return Setting::get('inside_shipping_cost', 50);
    }
}
