<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function list(){
        return view('admin.pages.wishlist.list');
    }
}
