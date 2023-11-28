<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Role;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
   
    public function registration(){
        return view('frontend.pages.customer.registration');
    }

    public function store(Request $request){

        $role=Role::where('name','customer')->first();
       
        if($role) 
        {
            User::create([
                'name' => $request->name,
                'email'=> $request->email,
                'role_id'=>$role->id,
                'password'=> bcrypt($request->password)  
            ]);
            //return redirect()->back()->with('message','You have successfully registered');
            notify()->success('You have successfully registered');
            return redirect()->route('frontend.home');
        }
       
        //return redirect()->back()->with('message','You have successfully registered');
        notify()->error('No role found as customer');
        return redirect()->back();
    }

    public function loginForm(){
        return view('frontend.pages.customer.login');
    }

    public function loginStore(Request $request){
        $credentials = $request->except('_token');
        if(auth()->attempt($credentials)){
            notify()->success('Customer login successfull');
            return redirect()->route('frontend.home');


        }
        notify()->error('Invalid credentials');
        return redirect()->route('registration');
        

    }

    public function logout(){
        auth()->logout();
        return redirect()->route('frontend.home');   
    }

    public function profileView(){
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('frontend.pages.profile', compact('orders'));
    }

    
    


    
       
        
}
