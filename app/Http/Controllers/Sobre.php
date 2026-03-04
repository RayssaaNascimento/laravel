<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sobre extends Controller
{
    function about(){
        return view('pagina-about');  /*view para visualizar a página php, view está carregando uma visualização*/
        }

    
}