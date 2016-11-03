<?php

namespace App\Http\Controllers;

use Image;
use App\lwproduct;
use App\Http\Requests;


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
         return view('auth.LoneWolf.lwpreowned');
    }
    
    public function CreateMotorcycle(){
        $CreateMotorcycleDisplay = new CreateMotorcycleDisplay();
        $CreateMotorcycleDisplay->motorcycle_title = $request->motorcycle_title;
        $CreateMotorcycleDisplay->stock = $request->stock;
        $CreateMotorcycleDisplay->color = $request->color;
        $CreateMotorcycleDisplay->condition = $request->condition;
        $CreateMotorcycleDisplay->milage = $request->milage;
        $CreateMotorcycleDisplay->price = $request->price;
        $CreateMotorcycleDisplay->motorcycle_image = $request->motorcycle_image;
        $CreateMotorcycleDisplay->year = $request->year;
        $CreateMotorcycleDisplay->save();
        return redirect('/lw_add');

    }
}