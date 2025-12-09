<?php

namespace App\Services;

use App\Models\Product;
use App\Models\Vat;
use App\Models\Coupon;

class CartService
{
    public function calculateTotal($cart, $couponCode = null)
    {
        $subtotal = 0;
        $items = [];

        foreach ($cart as $productId => $item) {
            $product = Product::find($productId);
            if (!$product) continue;

            $itemTotal = $product->price * $item['quantity'];
            $subtotal += $itemTotal;
            
            $items[] = [
                'product' => $product,
                'quantity' => $item['quantity'],
                'price' => $product->price,
                'total' => $itemTotal
            ];
        }

        $discount = 0;
        if ($couponCode) {
            $coupon = Coupon::where('code', $couponCode)
                ->where('status', 'active')
                ->where('start_date', '<=', now())
                ->where('end_date', '>=', now())
                ->first();

            if ($coupon && $subtotal >= ($coupon->min_order_amount ?? 0)) {
                $discount = $coupon->discount_type === 'percentage'
                    ? ($subtotal * $coupon->value / 100)
                    : $coupon->value;
                
                if ($coupon->max_discount && $discount > $coupon->max_discount) {
                    $discount = $coupon->max_discount;
                }
            }
        }

        $afterDiscount = $subtotal - $discount;

        $vat = 0;
        $activeVat = Vat::where('status', 'active')->where('applies_to', 'all')->first();
        if ($activeVat) {
            $vat = $activeVat->type === 'percentage'
                ? ($afterDiscount * $activeVat->value / 100)
                : $activeVat->value;
        }

        $total = $afterDiscount + $vat;

        return [
            'items' => $items,
            'subtotal' => $subtotal,
            'discount' => $discount,
            'vat' => $vat,
            'total' => $total
        ];
    }
}
