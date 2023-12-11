<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function home(){
        $categories = Category::all();
        $products = Product::all();
        return view('frontend.pages.home',compact('categories','products'));
    }

    public function search(Request $request){
        //dd($request->all());
        if($request->search){
        
            $products = Product::where('name', 'LIKE','%'.$request->search.'%')->get();

        }else{
            
           // $categories = Category::all();
        $products= Product::all();
        

        }
        return view('frontend.partial.search', compact('products')); 
        
    }

    public function contact(){
        return view('frontend.contact-us');
    }

    
}
