<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Goutte\Client;

class IndexController extends Controller
{
    public function blog(){
        return view('blog');
    }
}