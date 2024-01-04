<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Settings;
use App\Models\Slider;

use Illuminate\Http\Request;

class FrontendHomeController extends Controller
{
    public function home(){
        $categories = Category::all();
        $products = Product::all();
        $sliders = Slider::all();
        return view('frontend.pages.home',compact('categories','products','sliders'));
    }

    public function slider(){
        $sliders = Slider::all();
        //dd($sliders);

        return view('frontend.partial.carousel', compact('sliders'));
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
        //return view('frontend.contact-us');   
        return view('frontend.partial.reviewRatings');   

    }

    public function settings(){
        $settings = Settings::all(); 
        return view('frontend.pages.home', compact('settings')); 
    }

    public function ProductUnderCategory($category_id){
        $ProductUnderCategory = Product::where('category_id' , $category_id)->get();
        //dd($ProductUnderCategory);
        return view('frontend.pages.products-under-category', compact('ProductUnderCategory')); 

    }

    

    
}
