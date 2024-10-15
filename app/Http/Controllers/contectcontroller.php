<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class contectcontroller extends Controller
{
    //
    public function index(){
        $user = User::with('contect')->get();
        return $user->all();
    }
}
