<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
   public function teste($p1, $p2){
        //echo "a soma dos valoes $p1 + $p2 é: ".($p1+$p2);
        //array associativo
        //return view('site.teste',['p1' => $p1,'p2' => $p2]);
        //usando o compact
        //return view('site.teste',compact("p1","p2"));
        //usando o with
        return view('site.teste')->with("p1",$p1)->with("p2",$p2);
        
   }
}
