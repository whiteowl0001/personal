<?php

namespace App\Http\Controllers;

use Image;
use App\lwproduct;
use App\Http\Requests;
use Illuminate\Http\Request;


class LwproductsController extends Controller
{
    public function LW_Add(){
        return view('auth.LoneWolf.lwadd');
    }
    public function LW_Home(){
        return view('auth.LoneWolf.lwhome');
    }
    public function LW_Newsletter(){
        return view('auth.LoneWolf.lwnewsletter');
    }
    public function LW_Index(){
        $CreateMotorcycleDisplays =  CreateMotorcycleDisplay::all();
        return view('auth.LoneWolf.lwpreowned')->with(compact('$CreateMotorcycleDisplays'));
    }
    
    public function CreateMotorcycle(Request $request){
        $CreateMotorcycleDisplay = new lwproduct();
        $CreateMotorcycleDisplay->motorcycle_title = $request->motorcycle_title;
        $CreateMotorcycleDisplay->stock = $request->stock;
        $CreateMotorcycleDisplay->color = $request->color;
        $CreateMotorcycleDisplay->condition = $request->condition;
        $CreateMotorcycleDisplay->milage = $request->milage;
        $CreateMotorcycleDisplay->price = $request->price;
        $CreateMotorcycleDisplay->year = $request->year;
        if($request->hasFile('motorcycle_image')){
            $motorcycle_image = $request->file('motorcycle_image');
            $filename = time() . '.' . $motorcycle_image->getClientOriginalExtension();
            Image::make($motorcycle_image)->save( public_path('/images/LWImages/Motorcycles/' . $filename));
            
            $CreateMotorcycleDisplay->motorcycle_image = $filename;
        }
        $CreateMotorcycleDisplay->save();
        return redirect('/lw_add');

    }
}