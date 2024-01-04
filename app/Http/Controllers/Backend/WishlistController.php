<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function list(){
        $wishlist = Wishlist::with('user', 'product')->get();
        return view('admin.pages.wishlist.list', compact('wishlist'));
    }

    public function wishList(){
        
    }
}
