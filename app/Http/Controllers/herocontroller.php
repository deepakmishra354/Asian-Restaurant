<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\blogmodel;
use Illuminate\Http\Request;

class herocontroller extends Controller
{
    //
 public function main_page(){
    return view('frontend.pages.hero');
 }

    public function get_data(){
      
        $data = blogmodel::all();
        return view("frontend.pages.hero" , compact('data'));
       }
}
