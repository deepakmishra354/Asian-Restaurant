<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Menulunchmodel;
use Illuminate\Http\Request;

class Menulunchfrontendcontroller extends Controller
{
    //
    public function menus(){
        $data = Menulunchmodel::all();
       return view('frontend.pages.menu-lunch' , compact('data'));
    } 
}
