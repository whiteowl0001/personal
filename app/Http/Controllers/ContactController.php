<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\mymail;

class ContactController extends Controller

{
    public function contact(){
        return view('contact');
    }
    
    public function sendEmail(Request $request){
        
        Mail::to($request->email)->send(new mymail($request->title));
    }
}
