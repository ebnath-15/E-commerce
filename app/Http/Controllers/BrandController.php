<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list(){
        $brands = Brand ::all();
        return view('admin.pages.brand.list',compact('brands'));
    }
    public function edit(){
        return view('admin.pages.brand.form');
    }
    public function store(Request $request){
        Brand::create([
            'name'=>$request->brand_name,
            'description'=>$request->brand_description
        ]);
        return redirect()->back();

        
    }
}
