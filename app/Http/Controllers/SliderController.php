<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Slider;
use Image;
use Auth;

class SliderController extends Controller
{
    public function Slider(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function AddSlider(){

        return view('admin.slider.create' );
    }

    public function StoreSlider(request $request){
            
        
        $slider_image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920,1088)->save('image/slider/'.$name_gen);
        $last_img =  'image/slider/'.$name_gen;
       
       Slider::insert([
       'title' => $request->title,
       'description' => $request->description,
       'image' => $last_img,
       'created_at' => Carbon::now()
       
                   ]);
return Redirect()->route('home.slider')->with('success','Slider Inserted Successfully');
           }

           public function Edit($id) {

            $sliders= Slider::find($id);
            return view('admin.slider.edit',compact('sliders'));
            
               }

   
        public function Update(Request $request ,$id) {

        $validate = $request->validate([
            'image' => 'mimes:jpg,png,jpeg|max:1024'
        ]);

        

            $slider_image = $request->file('image');
if($slider_image){
    $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
    Image::make($slider_image)->resize(1920,1088)->save('image/slider/'.$name_gen);
    $last_img =  'image/slider/'.$name_gen;



Slider::find($id)->update([
'title' => $request->title,
'description' => $request->description,
'image' =>  $last_img,
'created_at' => Carbon::now()

            ]);
return Redirect()->back()->with('success','Slider updated Successfully');

}else{

    Slider::find($id)->update([
        'title' => $request->title,
        'description' => $request->description,
        'created_at' => Carbon::now()
        
                    ]);
        return Redirect()->back()->with('success','Slider updated Successfully');
}

           

                    }
        
        

}
