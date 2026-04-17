<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    public function login(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Pega apenas email e senha
        $credenciais = $request->only('email', 'password');

        // Tentativa de login
        if (Auth::attempt($credenciais)) {
            $request->session()->regenerate(); // segurança
            return redirect()->route('dashboard');
        }

        // Se falhar
        return back()->with('error', 'Email ou senha inválidos');
    }
}