<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    function index(){ 
        return view('administrador.index');
    }

    function add(Request $dados) { 
        $administrador = new \App\Models\AdministradorModel();
        $administrador::create($dados->all());

				//RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
				
        $administradores = new \App\Models\AdministradorModel();

        return view('administrador.index', ['success'=>'Cadastrado!', 'administradores'=>$administradores::all()]);
    }

    function remove(string $id) {
        $administrador = new \App\Models\AdministradoresModel();
        $administrador::destroy($id);

        return view('$administrador.index', ['success'=>'Removido!', 'administradores'=>$administrador::all()]);

    }
}
