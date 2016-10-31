<?php

namespace App\Http\Controllers;

use Image;
use App\lwproduct;
use App\Http\Requests;

class LwproductsController extends Controller
{
    public function LW_Home(){
        return view('auth.LoneWolf.lwhome');
    }
    public function LW_Newsletter(){
        return view('auth.LoneWolf.lwnewsletter');
    }
    public function LW_Index(){
         return view('auth.LoneWolf.lwpreowned');
    }
}