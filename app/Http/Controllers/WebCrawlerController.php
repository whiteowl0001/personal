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
        $url = file_get_contents('http://www.ebay.com/sch/i.html?_odkw=snes+'.$name.'&LH_PrefLoc=1&_sop=15&_osacat=0&_from=R40&_trksid=p2045573.m570.l1313.TR0.TRC0.H0.TRS0&_nkw=snes+'.$name.'&_sacat=0');
        $dom = new \domDocument;
        libxml_use_internal_errors(true);
        $dom->preserveWhiteSpace = false;
        $dom->loadHTML($url);
        $class = $dom->getElementById('ListViewInner');
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