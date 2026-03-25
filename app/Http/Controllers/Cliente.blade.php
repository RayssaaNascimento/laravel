<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cliente extends Controller
{
    function listar(){
        $nomes = [
            ["id" => 1, "nome" => "Rayssa", "idade" => 22],
            ["id" => 2, "nome" => "Carlos", "idade" => 30],
            ["id" => 3, "nome" => "Fernanda", "idade" => 27],
            ["id" => 4, "nome" => "João", "idade" => 19],
            ["id" => 5, "nome" => "Mariana", "idade" => 25],
            ["id" => 6, "nome" => "Lucas", "idade" => 28],
            ["id" => 7, "nome" => "Ana", "idade" => 21],
            ["id" => 8, "nome" => "Pedro", "idade" => 35],
            ["id" => 9, "nome" => "Juliana", "idade" => 26],
            ["id" => 10, "nome" => "Gabriel", "idade" => 24],
            ["id" => 11, "nome" => "Beatriz", "idade" => 29],
            ["id" => 12, "nome" => "Rafael", "idade" => 31],
            ["id" => 13, "nome" => "Camila", "idade" => 23],
            ["id" => 14, "nome" => "Bruno", "idade" => 33],
            ["id" => 15, "nome" => "Larissa", "idade" => 20],
            ["id" => 16, "nome" => "Thiago", "idade" => 36],
            ["id" => 17, "nome" => "Aline", "idade" => 28],
            ["id" => 18, "nome" => "Diego", "idade" => 34],
            ["id" => 19, "nome" => "Patrícia", "idade" => 32],
            ["id" => 20, "nome" => "Eduardo", "idade" => 27],
        ];

        return view('cliente', ["nomes"=>$nomes]);
    }

    
}


