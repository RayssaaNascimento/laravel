<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    function listar(){
        $produtos = [
            "produto1" => ["id"=>1, "nome"=>"computador", "preco"=>2000],
            "produto2" => ["id"=>2, "nome"=>"notebook", "preco"=>3500],
            "produto3" => ["id"=>3, "nome"=>"teclado", "preco"=>150],
            "produto4" => ["id"=>4, "nome"=>"mouse", "preco"=>80],
            "produto5" => ["id"=>5, "nome"=>"monitor", "preco"=>900],
            "produto6" => ["id"=>6, "nome"=>"impressora", "preco"=>600],
            "produto7" => ["id"=>7, "nome"=>"scanner", "preco"=>450],
            "produto8" => ["id"=>8, "nome"=>"webcam", "preco"=>120],
            "produto9" => ["id"=>9, "nome"=>"headset", "preco"=>200],
            "produto10" => ["id"=>10, "nome"=>"caixa de som", "preco"=>300],
            "produto11" => ["id"=>11, "nome"=>"hd externo", "preco"=>400],
            "produto12" => ["id"=>12, "nome"=>"ssd", "preco"=>500],
            "produto13" => ["id"=>13, "nome"=>"placa de vídeo", "preco"=>2500],
            "produto14" => ["id"=>14, "nome"=>"memória ram", "preco"=>350],
            "produto15" => ["id"=>15, "nome"=>"processador", "preco"=>1800],
            "produto16" => ["id"=>16, "nome"=>"fonte", "preco"=>450],
            "produto17" => ["id"=>17, "nome"=>"gabinete", "preco"=>300],
            "produto18" => ["id"=>18, "nome"=>"cooler", "preco"=>120],
            "produto19" => ["id"=>19, "nome"=>"roteador", "preco"=>250],
            "produto20" => ["id"=>20, "nome"=>"switch", "preco"=>220],
            "produto21" => ["id"=>21, "nome"=>"nobreak", "preco"=>700]
        ];

        return view('estoque', ["produtos"=>$produtos]);
    }

    
}


