<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bundle extends Model
{
    protected $fillable = ['name', 'description', 'base_price', 'discount_type', 'discount_amount', 'final_price', 'image', 'status'];

    public function items()
    {
        return $this->belongsToMany(Product::class, 'bundle_items')->withPivot('quantity');
    }
}
