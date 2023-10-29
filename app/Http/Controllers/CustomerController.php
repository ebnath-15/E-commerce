<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Category;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list(){
        $customers = Customer::all();
        return view('admin.pages.customer.list',compact('customers'));
    }
    public function form(){
        $categories = Category::all();
        return view('admin.pages.customer.form', compact('categories'));
    }
    public function store(Request $request){
        Customer::create([
            'first_name'=>$request->First_name,
            'last_name'=>$request->Last_name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'password'=> $request->password,
            'address'=> $request->address,
            'product_category'=> $request->category,


        ]);
        return redirect()->back();
    }
}
