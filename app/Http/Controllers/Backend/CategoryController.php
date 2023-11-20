<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        $categories = Category::paginate(5);
        return view('admin.pages.category.list',compact('categories'));
    }
    public function create(){
        return view('admin.pages.category.create');
    }
    public function store(Request $request){
       
        $fileName = null;
        //dd($request->all());
        if($request->hasFile('image')){ 
            
            $file= $request->file('image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName); 

        }

        
        Category::create([
            'name'=>$request->category_name,
            'image'=> $fileName,
            'description'=>$request->category_description 
        ]);
        return redirect()->back();
    
    }
    public function edit($id){
        $singleCategory = Category::find($id);
        return view('admin.pages.category.edit',compact('singleCategory'));
    }

    public function update(Request $request, $id){
        
        $singleCategory = Category::find($id);
        $fileName = $singleCategory->image;
        //dd($request->all());
        if($request->hasFile('image')){ 
            
            $file= $request->file('image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName); 

        }

        $singleCategory->update([
            'name'=>$request->category_name,
            'image'=> $fileName,
            'description'=>$request->category_description
            ]);
            notify()->success('category updated successfully');
            return redirect()->back();
        }
    

    public function delete($id){
        // dd($id);
        $singleCategory = Category::find($id);
        if($singleCategory){
            $singleCategory->delete();
            notify()->success('Category deleted successfully');
            return redirect()->back();
        }
        notify()->error('Category not found!');
            return redirect()->back();
        
        
    }
    public function view($id){
        $singleCategory = Category::find($id);
            return view('admin.pages.category.view', compact('singleCategory'));
        }
    }
    

