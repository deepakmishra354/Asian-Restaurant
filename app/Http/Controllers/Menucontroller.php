<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menuformmodel;
use Illuminate\Http\Request;

class Menucontroller extends Controller
{
    //

     public function menus(){
         $data = Menuformmodel::all();
        return view('frontend.pages.menu' , compact('data'));
     } 


    
    public function menu(){
        $data = Menuformmodel::all();
       return view('frontend.pages.menus', compact('data'));
    } 
    
}
