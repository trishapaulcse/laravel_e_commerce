<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 'active')->take(8)->get();
        $featuredProducts = Product::where('status', 'active')->latest()->take(8)->get();
        return view('website.home', compact('categories', 'featuredProducts'));
    }
}
