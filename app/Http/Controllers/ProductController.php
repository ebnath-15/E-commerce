<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products = Product::all();
        return view('admin.pages.product.list', compact('products'));
    }
    public function add(){
        return view('admin.pages.product.add');
    }
    public function store(Request $request ){
        Product::create([
            'name'=>$request->product_name,
            'decription'=>$request->product_description,
            'price'=>$request->product_price,
            'quantity'=> $request->product_quantity,
        ]);
    }
}
