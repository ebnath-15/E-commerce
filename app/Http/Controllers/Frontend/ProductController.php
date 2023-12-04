<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productView($productId){
        $singleProduct = Product::with('brand')->find($productId);
        // dd($singleProduct);
        return view('frontend.pages.product-view',compact('singleProduct'));
    }
}
