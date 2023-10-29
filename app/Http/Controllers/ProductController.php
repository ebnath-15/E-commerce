<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(){
        $products = Product::all();
        return view('admin.pages.product.list', compact('products'));
    }
    public function add(){
       $categories= Category::all();
       $brands= Brand::all();
       //$categories= Category::find($id);

        return view('admin.pages.product.add', compact('categories','brands'));
    }
    public function store(Request $request ){

         //dd($request->all());
        
        Product::create([
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'name'=>$request->product_name,
            'decription'=>$request->product_description,
            'price'=>$request->product_price,
            'quantity'=> $request->product_quantity, 
        ]); 

        notify()->success('Your data has been stored!');
        return redirect()->route('product.list');
    }
}
