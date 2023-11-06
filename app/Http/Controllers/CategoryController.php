<?php

namespace App\Http\Controllers;
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
        Category::create([
            'name'=>$request->category_name,
            'description'=>$request->category_description
        ]);
        return redirect()->back();
        
    }
    public function edit(){
        return view('admin.pages.category.create');
    }

    public function delete(){
        
    }
    
}
