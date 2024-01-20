<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ReviewRatings;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;


class ReviewController extends Controller
{
    public function addReview($order_id, $product_id){

       // dd($order_id, $product_id);
       
    
        return view('frontend.partial.add-review',compact('order_id','product_id'));  
    }

    public function postReview(Request $request, $order_id, $product_id){
         
       // $product = Product::where('order_id', auth()->user()->id)->get();

        ReviewRatings::create([
            'order_id'=> $order_id,
            'product_id' => $product_id, 
            'user_id' => auth()->user()->id,
            'ratings' => $request->rating,
            'review' => $request->review        

        ]);
        notify()->success('Thanks for your Feedback');
        return redirect()->back();

    }
}


