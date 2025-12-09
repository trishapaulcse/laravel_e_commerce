<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = ['name', 'price', 'duration_days', 'free_delivery', 'extra_discount', 'early_access', 'cashback_percentage', 'priority_support', 'status'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'membership_users')->withPivot('start_date', 'end_date', 'status');
    }
}
