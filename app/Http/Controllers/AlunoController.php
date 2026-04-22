<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){
        return view('aluno.index');
    }

    function add(Request $dados){
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

        $alunos = \App\Models\AlunoModel::all();

        return view('aluno.index', ['success' => 'Aluno cadastrado com sucesso!', 'alunos' => $alunos]);
    }

    function remove(Request $request){
        $aluno = \App\Models\AlunoModel::find($request->input('id'));
        if($aluno){
            $aluno->delete();
        }
        return redirect()->route('aluno.list');
    }

    function edit(Request $request){
        $aluno = \App\Models\AlunoModel::find($request->input('id'));
        if($aluno){
            $aluno->nome = $request->input('nome');
            $aluno->save();
        }
        return redirect()->route('aluno.list');
    }

    function list(Request $request){
        $alunos = \App\Models\AlunoModel::all();
        return view('aluno.list', ['alunos' => $alunos]);
    }
}
