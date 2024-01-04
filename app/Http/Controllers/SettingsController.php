<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    public function settings(){
        $settings = Settings::all();
        return view('admin.pages.settings.view', compact('settings'));
    } 
    public function create(){
        $settings = Settings::all();
        return view('admin.pages.settings.create', compact('settings')); 
    }

    public function save(Request $request){

        $fileName = null;
        if($request->hasFile('logo')){
            $file = $request->logo;
            $fileName = date('YMdhis').$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName); 
        }


        Settings::create([
            'company_name' => $request->company_name,
            'location' => $request->location,
            'contact_details' => $request->contact_details,
            'logo'=> $fileName,
        ]);
        return redirect()->back();
        
    }   
    public function edit(){
        $setting = Settings::all();
        return view('admin.pages.settings.edit', compact('setting'));
    }

    public function reset(Request $request){
        $setting = Settings::all();
        $fileName = $setting->logo;
        if($request->hasFile('logo')){
            $file = $request->logo;
            $fileName = date('YMdhis').$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName); 
        }

       
       if($setting){
        $setting->update([
            'company_name' => $request->company_name,
            'location' => $request->location,
            'contact_details' => $request->contact_details, 
            'logo'=> $fileName,
        ]); 
       } 
    }

}
