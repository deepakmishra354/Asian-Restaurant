<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\blogmodel;
use Illuminate\Http\Request;

class blogfrontcontroller extends Controller
{
    //
    public function get_data(){
      
        $data = blogmodel::paginate(3);
        return view("frontend.pages.blog" , compact('data'));
       }

}
