<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list(){
        $roles = Role::all();
       
     return view('admin.pages.Role.list', compact('roles'));
    }
    public function createForm(){
        return view('admin.pages.Role.form');
    }
    public function store(Request $request){
        Role::create([
            'name'=> $request->name,
            // dd($request->name) 
        ]);
        return redirect()->route('role.list');
    }

    public function edit($id){
        $role = Role::find($id);
        return view('admin.pages.Role.edit',compact('role'));
    }
    public function update(Request $request, $id){
        $role = Role::Find($id);
        if($role){
            $role->update([
                'name'=> $request->name
            
            ]);
            notify()->success('Role updated successfully');
            return redirect()->back();
        }

    }

    public function delete($id){
        $role= Role::find($id);
        if($role){
            $role->delete();
            notify()->success('Deleted Successfully');
            return redirect()->back();
        }
    }
    
}
