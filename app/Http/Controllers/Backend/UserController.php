<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
//use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginForm(){
        return view('admin.pages.login');
    }
    public function post(Request $request){

        //dd($request->all());
        $validate = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|min:6',

        ]);
        if($validate->fails()){
            
            return redirect()->back()->withErrors($validate);
            
        }
        $credential = $request->except('_token');
        
        $login = auth()->attempt($credential);
        
        if($login){
           
            return redirect()->route('dashboard');
        }
        
        return redirect()->back()->with('message','Incorrect email or password');

}
public function logout(){
    auth()->logout();
    return redirect()->route('admin.login');
}

}

