<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'cost_price',
        'stock',
        'sku',
        'barcode',
        'image',
        'category_id',
        'brand_id',
        'unit_id',
        'status',
        'vat_applicable',
        'vat_type',
        'discount_type',
        'discount_value'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

    public function bundleItems()
    {
        return $this->hasMany(BundleItem::class);
    }

    public function bundles()
    {
        return $this->belongsToMany(Bundle::class, 'bundle_items')->withPivot('quantity');
    }
}