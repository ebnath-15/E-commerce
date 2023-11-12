<?php

namespace App\Http\Controllers\Backend;
use App\Models\Role;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function list(){
        $users = User::all();
       
        return view('admin.pages.User.list', compact('users'));

    }
    public function createForm(){
        $roles = Role::all();
        return view('admin.pages.User.form', compact('roles')); 

    }

    public function store(Request $request){


        //   dd($request->all());
        $validate = Validator::make($request->all(),[
            'name' => 'required',
            'role' => 'required',
            'email'=> 'required|email',
            'password'=>'required|min:6',

        ]);
        if($validate->fails()){
            // dd($validate->errors());
            return redirect()->back()->withErrors($validate);
        }


    
        
        $fileName = null;
        if($request->hasFile('user_image'));
        {
            $file = $request->file('user_image');
          
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension(); 
           
            $file->storeAs('/uploads',$fileName);
        }

        User::create([
            'name'=> $request->name,
            'image'=> $fileName,
            'role'=> $request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),
            'phone'=>$request->phone_number, 
            
            
        ]);
        
        return redirect()->back()->with('message','User created successfully.');

    }
    //user login form
    public function loginForm(){
        return view('admin.pages.login');
    }
    public function post(Request $request){

        
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
//user logout
public function logout(){
    auth()->logout();
    return redirect()->route('admin.login');
}

}

