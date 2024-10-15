<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\blogmodel;
use Illuminate\Http\Request;

class blogcontroller extends Controller
{
    //
    public function form(){
        return view('admin.pages.blog');
    }
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'blog_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Limit size to 2MB (if needed)
            'blog_title' => 'required|max:40',
            'blog_header' => 'required|max:49',
            'blog_description' => 'required|max:403',
        ]);
     
        // Save form data into the model
        $data = new blogmodel();
        $data->blog_title = $request->blog_title;
        $data->blog_header = $request->blog_header;
        $data->blog_description = $request->blog_description;
        // Check if image is uploaded
        if ($request->file('blog_image')) {
            $file  = $request->file('blog_image');
            $exe = $file->extension();
            $filename = rand(1,1000). '.' .$exe;
            $path = public_path('Blog');
            $file ->move($path , $filename);
            $data-> blog_image= $filename;
            flash()->success('Blog Added Successfully.');
        } else {
            flash()->error('An unexpected error occurred.');
        }

        // Save the data in database
        $data->save();

        // Redirect back with success or error message
        return redirect()->route('blog-data');
    }

    public function get_data(){
      
        $data = blogmodel::all();
        return view("admin.pages.blog-data" , compact('data'));
       }

       public function edit(Request $request){
        $data = blogmodel::where("id",$request->id )->first();
        return view('admin.pages.blog-edit',compact('data'));
    } 
    public function update(Request $request){

        $validatedData = $request->validate([
            'blog_title' => 'required|max:255',
            'blog_header' => 'nullable|max:255',
            'blog_description' => 'nullable',
        ]);
        
        $data = blogmodel::where("id",$request->id )->first();
        $data->blog_title = $request->blog_title;
        $data->blog_header = $request->blog_header;
        $data->blog_description = $request->blog_description;
        // Check if image is uploaded
        if ($request->file('blog_image')) {

            if(public_path('Blog'). '/' .$data->blog_image){
                unlink(public_path('Blog'). '/' .$data->blog_image);
           } 
            $file  = $request->file('blog_image');
            $exe = $file->extension();
            $filename = rand(1,1000). '.' .$exe;
            $path = public_path('Blog');
            $file ->move($path , $filename);
            $data-> blog_image= $filename;
            flash()->success('Blog Updated Successfully.');
            
             $data->update();
             return redirect()->route('blog-data');
        } 

        else {
            flash()->error('An unexpected error occurred.');
        }
    } 
    public function delete(Request $request){
        $data = blogmodel::where("id",$request->id )->first();
        if(public_path('Blog'). '/' .$data->blog_image){
            unlink(public_path('Blog'). '/' .$data->blog_image);
    } 
       flash()->warning('Blog Deleted Successfully.');
       $data->delete();
       return redirect()->route('blog-data');

    }
}
