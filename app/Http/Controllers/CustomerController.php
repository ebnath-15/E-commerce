<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
    public function list(){
        $customers = Customer::with(['category','brand'])->paginate(5);
        return view('admin.pages.customer.list',compact('customers'));
    }
    public function form(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.pages.customer.form', compact('categories','brands'));
    }
    public function store(Request $request){
        //dd($request->all());
    
        $validate = validator::make($request->all(),[ 
            'First_name'=>'required',
            'Last_name'=>'required',
             'email'=>'required',
             'phone_number' => 'required|numeric',
             'password'=>'required|min:6'
        ]);
        if($validate->fails()){
            //dd($validate->getMessageBag());
            //dd($request->all);
            return redirect()->back()->withErrors($validate);
        }
        Customer::create([
            'category_id'=>$request->category_id,
            'brand_id'=>$request->brand_id,
            'first_name'=>$request->First_name,
            'last_name'=>$request->Last_name,
            'email'=> $request->email,
            'phone_number'=> $request->phone_number,
            'password'=> $request->password,
            'address'=> $request->address,
            'product_name'=>$request->product_name,
            


        ]);
        
        notify()->success('Your data has been stored');
        return redirect()->route('customer.list');
    }
}
