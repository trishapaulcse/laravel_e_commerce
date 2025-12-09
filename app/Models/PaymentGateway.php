<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentGateway extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'api_key',
        'api_secret',
        'merchant_id',
        'is_active',
        'is_sandbox'
    ];

    protected $hidden = ['api_key', 'api_secret'];
}
