<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{   
    public function list(){
        $categories = Category::all();
        return view('frontend.pages.home',compact('categories'));

    }
}
