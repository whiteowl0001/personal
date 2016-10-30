<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use App\ProjectDisplayer;

class ProjectController extends Controller

{
    public function CreateProjectDisplay(Request $request){
        
        $ProjectDisplay = new ProjectDisplayer();
        $ProjectDisplay->ProjectTitle = $request->ProjectTitle;
        $ProjectDisplay->ProjectImage = $request->ProjectImage;
        $ProjectDisplay->save();
        
  
         
        return redirect('/add');
    }
}
