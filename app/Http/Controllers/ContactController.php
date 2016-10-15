<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class ContactController extends Controller

{
    public function contact(){
        return view('contact');
    }
}
