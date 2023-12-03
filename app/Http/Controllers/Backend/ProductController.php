<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
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


        $validate = validator::make(request()->all(),
        [
           'product_name'=>'required',
           'product_price'=>'required|numeric|min:100'
       ]);
       
        if($validate->fails()){
           return redirect()->back()->withErrors($validate); 
        }
        
        $fileName= null;

        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = date('Ymdhis').$file->getClientOriginalExtension();//gen name
          
            $file->storeAs('/uploads',$fileName);
        }

        
       
        
        Product::create([
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'name'=>$request->product_name,
            'decription'=>$request->product_description,
            'image'=> $fileName,
            'price'=>$request->product_price,
            'stock'=> $request->stock, 
        ]); 

        notify()->success('Your data has been stored!');
        return redirect()->route('product.list');
    }

    public function edit($id){
        $singleProduct = product::find($id);
        $categories = Category::all();
        
        $brands = Brand::all();
        return view('admin.pages.product.edit',compact('singleProduct','categories','brands'));


    }
    public function update(Request $request, $id){
        $singleProduct = Product::find($id);
    
         
         $fileName= $singleProduct->image;
 
         if($request->hasFile('file')){
             $file = $request->file('file');
             $fileName = date('Ymdhis').$file->getClientOriginalExtension();//gen name
           
             $file->storeAs('/uploads',$fileName);
         }
         if($singleProduct){
            $singleProduct->update([
                'category_id'=>$request->category_id,
                'brand_id'=>$request->brand_id,
                'name'=>$request->product_name,
                'decription'=>$request->product_description,
                'image'=> $fileName,
                'price'=>$request->product_price,
                'stock'=> $request->stock, 
    
            ]);

            notify()->success('product updated successfully');
            return redirect()->back();
            
         }
        }

         public function delete($id){
            $singleProduct = Product::find($id);
            if($singleProduct){
                $singleProduct->delete();
            }
            notify()->success('Deleted');
            return redirect()->back();
         }
}
        // }

    // public function view($id){
    //     $singleproduct = Product::find($id);
    //     $categories = Category::all();
    //     $brands = Brand::all();

    //     if($singleproduct){
    //         $singleproduct->view(){
    //             return redirect()->back()
    //         }
    //     }



        
    

