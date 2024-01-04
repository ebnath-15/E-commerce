<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('admin.home'); 
    }

    public function slider(){
        $sliders = Slider::all();
        return view('admin.pages.slider.slider-view', compact('sliders'));
    }

    public function create(){
        return view('admin.pages.slider.create');
    }

    public function store(Request $request){
        // dd($request->all());
        
        $fileName = null;
        if($request->hasFile('image')){ 
            
            $file= $request->file('image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName); 

        }
      // dd($file);

        Slider::create([
             'name' => $request->name,
             'image' => $fileName

        ]);
        return redirect()->back();

    }

    public function edit($id){
        $slider = Slider::find($id);
            return view('admin.pages.slider.edit', compact('slider'));
        }

        public function update(Request $request, $id){
            $slider = Slider::find($id);
            $fileName = $slider->image;
        if($request->hasFile('image')){    
            
            $file= $request->file('image');
            $fileName = date('Ymdhis').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads',$fileName); 

            if($slider){
                $slider->update([
                    'name' => $request->name,
                    'image' => $fileName

                ]);
                notify()->success('Slider Updated');
                return redirect()->back();
            } 

        }

        }
        public function delete($id){
            $slider = Slider::find($id);
            if($slider){
                $slider->delete();
            }
            notify()->success('Slider Deleted'); 
            return redirect()->back();     
        }

}

