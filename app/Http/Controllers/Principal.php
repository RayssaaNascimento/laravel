<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        echo 'Página Principal';
    }

public function login(Request $request)
{
    $credenciais = $request->only('email', 'password');

    if (Auth::attempt($credenciais)) {
        return redirect()->route('dashboard');
    }

    return back()->with('error', 'Email ou senha inválidos');
}

    
}


