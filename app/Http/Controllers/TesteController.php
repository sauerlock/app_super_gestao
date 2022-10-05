<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
         //echo "a soma dos valores $p1 + $p2 é: ".($p1+$p2);
         
         //return view('site.teste', ['x' => $p1, 'y' => $p2]); //Array ou Indice Associativo
         
         //return view('site.teste', compact('p1', 'p2')); //Compact
        
         return view('site.teste')->with('p1', $p1)->with('p2', $p2); //With
}
}
 