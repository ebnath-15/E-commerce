<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Validator;


class CustomerController extends Controller
{
   
    public function registration(){
        return view('frontend.pages.customer.registration');
    }

    public function store(Request $request){
        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'role'=>'customer',
            'password'=> bcrypt($request->password) 
        ]);
        //return redirect()->back()->with('message','You have successfully registered');
        notify()->success('You have successfully registered');
        return redirect()->route('frontend.home');
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
        return view('frontend.pages.profile');
    }
    


    
       
        
}
