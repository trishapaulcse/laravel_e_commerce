<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use App\Models\Product;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        if(auth()->check()) {
            $wishlists = Wishlist::where('user_id', auth()->id())->with('product')->get();
        } else {
            $wishlistIds = session()->get('wishlist', []);
            $wishlists = Product::whereIn('id', $wishlistIds)->get()->map(function($product) {
                return (object)['product' => $product];
            });
        }
        
        return view('website.wishlist.index', compact('wishlists'));
    }

    public function add(Request $request)
    {
        $request->validate(['product_id' => 'required|exists:products,id']);
        
        if(auth()->check()) {
            $exists = Wishlist::where('user_id', auth()->id())
                ->where('product_id', $request->product_id)
                ->exists();
            
            if(!$exists) {
                Wishlist::create([
                    'user_id' => auth()->id(),
                    'product_id' => $request->product_id
                ]);
            }
        } else {
            $wishlist = session()->get('wishlist', []);
            if(!in_array($request->product_id, $wishlist)) {
                $wishlist[] = $request->product_id;
                session()->put('wishlist', $wishlist);
            }
        }
        
        return response()->json(['success' => true, 'message' => 'Added to wishlist']);
    }

    public function remove($id)
    {
        if(auth()->check()) {
            Wishlist::where('user_id', auth()->id())
                ->where('product_id', $id)
                ->delete();
        } else {
            $wishlist = session()->get('wishlist', []);
            $wishlist = array_diff($wishlist, [$id]);
            session()->put('wishlist', $wishlist);
        }
        
        return redirect()->back()->with('success', 'Removed from wishlist');
    }
}
