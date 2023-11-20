<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function list(){
        $brands = Brand ::all();
        return view('admin.pages.brand.list',compact('brands'));
    }
    public function create(){
        return view('admin.pages.brand.form');
    }
    public function store(Request $request){
        $fileNmae = null;
        if($request->hasFile('image'))
        $file = $request->file('image');
        $fileName = date('YMdhis').$file->getClientOriginalExtension();
        $file->storeAs('/uploads', $fileNmae);
        Brand::create([
            'name'=>$request->brand_name,
            'description'=>$request->brand_description,
            'image'=>$fileName,
        ]);
        return redirect()->back();
    }
    public function edit($id){
        $singleBrands = Brand::find($id);
        return view('admin.pages.brand.edit',compact('singleBrands'));

    }

    public function update(Request $request,$id){

        $fileName = null;
                if($request->hasFile('image')){
                $file = $request->file('image');
                $fileName = date('YMdhis').$file->getClientOriginalExtension();
                $file->storeAs('/uploads', $fileName);
                }

        $singleBrands = Brand::find($id);
            $singleBrands->update([
                    'name'=>$request->brand_name,
                    'description'=>$request->brand_description,
                    'image'=>$fileName,

                ]);
                notify()->success('Brand updated successfully');
                return redirect()->back();
        }

        public function delete($id){
            $singlebrand = Brand::find($id);
            //if($singlebrand){
                $singlebrand->delete();
                notify()->success('Brand deleted');
                return redirect()->back();
            }
        }
        
    

