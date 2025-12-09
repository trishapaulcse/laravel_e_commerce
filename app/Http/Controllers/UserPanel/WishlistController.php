<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = auth()->user()->wishlists()->with('product')->get();
        return view('user-panel.wishlist.index', compact('wishlists'));
    }

    public function store(Request $request)
    {
        Wishlist::firstOrCreate([
            'user_id' => auth()->id(),
            'product_id' => $request->product_id
        ]);
        return back()->with('success', 'Added to wishlist');
    }

    public function destroy($id)
    {
        Wishlist::where('user_id', auth()->id())->where('id', $id)->delete();
        return back()->with('success', 'Removed from wishlist');
    }
}
