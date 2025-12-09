<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subtotal',
        'discount',
        'vat',
        'coupon_discount',
        'coupon_code',
        'shipping',
        'total',
        'payment_method',
        'status',
        'shipping_address',
        'billing_address',
        'tracking_code'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function payments()
    {
        return $this->hasMany(OrderPayment::class);
    }

    public function trackings()
    {
        return $this->hasMany(OrderTracking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
