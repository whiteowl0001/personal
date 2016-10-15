<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

class HomeController extends Controller
{
    public function home()
	{
		return view('home');                 //resources/views/pages/about.blade.php
	}
}
