<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::where('status', 'active')->latest()->take(8)->get();
        $categories = Category::whereNull('parent_id')->where('status', 'active')->get();
        return view('website.home', compact('featuredProducts', 'categories'));
    }
}
