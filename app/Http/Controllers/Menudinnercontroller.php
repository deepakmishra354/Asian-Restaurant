<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menudinnermodel;
use Illuminate\Http\Request;

class Menudinnercontroller extends Controller
{
    //
    public function form(){
        return view("admin.pages.menu-dinner");
    }
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'menu_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Limit size to 2MB (if needed)
            'menu_title' => 'required|max:40',
            'menu_price' => 'required|max:8',
            'menu_description' => 'required|max:403',
        ]);
     
        // Save form data into the model
        $data = new Menudinnermodel();
        $data->menu_title = $request->menu_title;
        $data->menu_price = $request->menu_price;
        $data->menu_description = $request->menu_description;
        // Check if image is uploaded
        if ($request->file('menu_image')) {
            $file  = $request->file('menu_image');
            $exe = $file->extension();
            $filename = rand(1,1000). '.' .$exe;
            $path = public_path('Dinner');
            $file ->move($path , $filename);
            $data-> menu_image= $filename;
            flash()->success('Menu Added Successfully.');
        } else {
            flash()->error('An unexpected error occurred.');
        }

        // Save the data in database
        $data->save();

        // Redirect back with success or error message
        return redirect()->back();
    }

    public function get_data(){
      
        $data = Menudinnermodel::all();
        return view("admin.pages.menu-dinner-data" , compact('data'));
       }

       public function edit(Request $request){
        $data = Menudinnermodel::where("id",$request->id )->first();
        return view('admin.pages.menu-dinner-edit',compact('data'));
    }
    public function update(Request $request){
        $data = Menudinnermodel::where("id",$request->id )->first();
        $data->menu_title = $request->menu_title;
        $data->menu_price = $request->menu_price;
        $data->menu_description = $request->menu_description;
        // Check if image is uploaded
        if ($request->file('menu_image')) {

            if(public_path('Dinner'). '/' .$data->menu_image){
                unlink(public_path('Dinner'). '/' .$data->menu_image);
           } 
            $file  = $request->file('menu_image');
            $exe = $file->extension();
            $filename = rand(1,1000). '.' .$exe;
            $path = public_path('Dinner');
            $file ->move($path , $filename);
            $data-> menu_image= $filename;
            flash()->success('Menu Updated Successfully.');
        } else {
            flash()->error('An unexpected error occurred.');
        }
       
        $data->update();
        return redirect()->route('menu-dinner-data');
    } 
     
    public function delete(Request $request){
        $data = Menudinnermodel::where("id",$request->id )->first();
        if(public_path('Dinner'). '/' .$data->menu_image){
            unlink(public_path('Dinner'). '/' .$data->menu_image);
       } 
       $data->delete();
       return redirect()->route('menu-dinner-data');

    }

}
