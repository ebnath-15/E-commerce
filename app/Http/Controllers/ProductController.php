<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

class ProductController extends Controller
{
    public function list(){
        $products = Product::with(['category','brand'])->paginate(5);
        return view('admin.pages.product.list', compact('products'));
    }
    public function add(){
       $categories= Category::all();
       $brands= Brand::all();

        return view('admin.pages.product.add', compact('categories','brands'));
    }
    public function store(Request $request ){

         //dd($request->all());
         $validate = validator::make(request()->all(),[
        'product_name'=>'required',
         'product_price'=>'required|numeric|min:100']);
         if($validate->fails()){
            return redirect()->back()->withErrors($validate);
         }
        
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
