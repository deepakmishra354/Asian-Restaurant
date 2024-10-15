<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menudinnermodel;
use Illuminate\Http\Request;

class Menudinnerfrontcontroller extends Controller
{
    //

    public function menus(){
        $data = Menudinnermodel::all();
       return view('frontend.pages.menu-dinner' , compact('data'));
    } 
}
