<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller 
{
    public function wish($product_id){
    
        Wishlist::create([
            'user_id'=>auth()->user()->id,
            'product_id'=>$product_id
        ]);
        notify()->success('product saved on wishlist');  
        return redirect()->back();  


    }
    public function wishView(){
        $wishes = Wishlist::where('user_id',auth()->user()->id)->get();
        return view('frontend.pages.wishlist.wishlist-view',compact('wishes'));
    }

    public function remove($id){


        $wishProduct = Wishlist::find($id);
        // dd($product);
        if($wishProduct){
            $wishProduct->delete();
            notify()->success('product removed from wishlist');
            return redirect()->back();   
        }
}      
}