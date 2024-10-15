<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menudersrtmodel;
use Illuminate\Http\Request;

class Menudesertfrontcontroller extends Controller
{
    //
    public function menus(){
        $data = Menudersrtmodel::all();
       return view('frontend.pages.menu-desert' , compact('data'));
    } 
}
