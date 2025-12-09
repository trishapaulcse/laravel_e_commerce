<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('home.index');
    }

     public function shop()
    {
        return view('pages.shop');
    }
     public function channel()
    {
        return view('pages.channel');
    }

    public function about()
    {
        return view('pages.about');
    }

     public function contact()
    {
        return view('pages.contact');
    }
}
