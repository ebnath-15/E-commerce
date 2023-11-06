<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class orderController extends Controller
{
    public function list(){
        return view('admin.pages.order.list');
    }
    public function form(){
        return view('admin.pages.order.form');
    }
    public function store(Request $request){
        
    }
}
