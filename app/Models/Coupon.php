<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['code', 'type', 'discount_type', 'value', 'min_order_amount', 'max_discount', 'usage_per_user', 'total_usage', 'start_date', 'end_date', 'status'];
    protected $casts = ['start_date' => 'datetime', 'end_date' => 'datetime'];
}
