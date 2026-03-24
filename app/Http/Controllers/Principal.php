<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function index(){
        return view('pagina-principal');
    }

    function contato(){
        return view('pagina-contato');
    }

    function conteudos(){
        return view('pagina-conteudos');
    }

    function login(){
        return view('pagina-login');
    }

    
}


