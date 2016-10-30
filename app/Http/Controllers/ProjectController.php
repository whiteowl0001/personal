<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Image;

class ProjectController extends Controller

{
    public function CreateProjectDisplay(Request $request){
        
         if($request->hasFile('ProjectImage')){
            $ProjectImage = $request->file('ProjectImage');
            $filename = time() . '.' . $ProjectImage->getClientOriginalExtension();
            Image::make($ProjectImage)->save( public_path('images/ProdjectImages/' . $filename));
         
        $ProjectTitle = $request['ProjectTitle'];
        
        
        $ProjectDisplay = new Display_project();
        $ProjectDisplay->ProjectTitle = $ProjectTitle;
        $ProjectDisplay->ProjectImage = $filename;
        $ProjectDisplay->save();
         }
         
        return redirect('/add');
    }
}
