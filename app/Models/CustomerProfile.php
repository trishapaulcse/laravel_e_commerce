<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{
    protected $fillable = [
        'user_id',
        'company_name',
        'tax_number',
        'bio',
        'profile_image',
        'cover_image',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'website',
        'default_shipping_address_id',
        'default_billing_address_id',
        'preferred_language',
        'preferred_currency',
        'newsletter_subscribed',
        'sms_notifications',
        'email_notifications',
        'last_login_at',
        'last_login_ip',
        'total_orders',
        'total_spent',
        'loyalty_points'
    ];

    protected $casts = [
        'newsletter_subscribed' => 'boolean',
        'sms_notifications' => 'boolean',
        'email_notifications' => 'boolean',
        'last_login_at' => 'datetime',
        'total_spent' => 'decimal:2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function defaultShippingAddress()
    {
        return $this->belongsTo(Address::class, 'default_shipping_address_id');
    }

    public function defaultBillingAddress()
    {
        return $this->belongsTo(Address::class, 'default_billing_address_id');
    }
}
