<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Goutte\Client;

class WebCrawlerController extends Controller
{
    public function search(){
        return view('auth.search');
    }
    
    public function crawler(Request $request){
        
        $name = $request->searchvalue;
        $url = file_get_contents('http://www.ebay.com/sch/i.html?_from=R40&_sacat=0&_nkw=snes%20games%20'.$name.'&rt=nc&LH_PrefLoc=1&_trksid=p2045573.m1684');
        $dom = new \domDocument;
        
        libxml_use_internal_errors(true);
        $dom->preserveWhiteSpace = false;
        $dom->loadHTML($url);
        $class = $dom->getElementById('ListViewInner');
        if(!$class){
            die("Elements not found");
        }
        $titles = $class->getElementsByTagName('li');
    
        foreach($titles as $title){
    
            $classes = $title->getAttribute('class');
            
            if (strpos($classes, "lvprice prc") !== false){
                
                           $price = $title->nodeValue;
                           echo $price . "<br>";
                   }
        }
        echo $class->C14N();
    }
}