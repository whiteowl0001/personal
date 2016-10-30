<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use App\ProjectDisplayers;

class ProjectController extends Controller

{
    public function CreateProjectDisplay(Request $request){
        
        $ProjectDisplay = new ProjectDisplayers();
        $ProjectDisplay->ProjectTitle = $request->ProjectTitle;
        
        if($request->hasFile('ProjectImage')){
            $ProjectImage = $request->file('ProjectImage');
            $filename = time() . '.' . $ProjectImage->getClientOriginalExtension();
            Image::make($ProjectImage)->resize(300,300)->save( public_path('/images/ProdjectImages/' . $filename));
            
            $ProjectDisplay->ProjectImage = $filename;
        }
        $ProjectDisplay->save();
         
        return redirect('/add');
    }
}
