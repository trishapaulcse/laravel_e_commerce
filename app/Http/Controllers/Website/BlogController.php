<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 'published')->latest('published_at')->paginate(12);
        return view('website.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 'published')->firstOrFail();
        return view('website.blogs.show', compact('blog'));
    }
}
