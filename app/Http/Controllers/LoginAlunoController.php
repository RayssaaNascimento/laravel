<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginAlunoModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\CodigoVerificacaoMail;

class LoginAlunoController extends Controller
{
    public function index() {
        return view('loginaluno.index');
    }

    public function cadastro() {
        return view('loginaluno.cadastro');
    }

    public function alunologado() {
        return view('loginaluno.alunologado');
    }

    // 1. Esse método agora NÃO SALVA no banco ainda, ele apenas valida e envia o e-mail
public function adicionar(Request $request) { 
    $request->validate([
        'nome'            => 'required|string|max:255',
        'email'           => 'required|email|unique:alunos,email',
        'senha'           => 'required|min:6',
        'area_cientifica' => 'required|string'
    ], [
        'email.unique'    => 'Este e-mail já está cadastrado.',
        'senha.min'       => 'A senha deve ter pelo menos 6 caracteres.'
    ]);

    // Gera um código aleatório de 6 dígitos
    $codigo = rand(100000, 999990);

    // Guarda temporariamente os dados do formulário e o código gerado na SESSÃO do navegador
    session([
        'cadastro_temporario' => [
            'nome'            => $request->nome,
            'email'           => $request->email,
            'senha'           => Hash::make($request->senha), // Senha já criptografada
            'area_cientifica' => $request->area_cientifica,
        ],
        'codigo_verificacao' => $codigo
    ]);

    // Envia o e-mail real com o código para o e-mail digitado
    Mail::to($request->email)->send(new CodigoVerificacaoMail($codigo));

    // Redireciona para a página onde ele deve digitar o código
    return redirect()->route('loginaluno.verificar_codigo');
}

// 2. Exibe a tela para digitação do código
public function telaCodigo() {
    if (!session()->has('cadastro_temporario')) {
        return redirect()->route('loginaluno.cadastro');
    }
    return view('loginaluno.verificar_codigo');
}

// 3. Valida se o código digitado bate com o enviado por e-mail e cria a conta definitiva
public function confirmarCodigo(Request $request) {
    $request->validate([
        'codigo_digitado' => 'required|numeric'
    ]);

    $codigoCorreto = session('codigo_verificacao');
    $dadosTemp = session('cadastro_temporario');

    // Se o código digitado estiver errado
    if ($request->codigo_digitado != $codigoCorreto) {
        return back()->withErrors(['codigo_digitado' => 'Código de verificação incorreto. Tente novamente.']);
    }

    // Se o código estiver correto, cria definitivamente o Aluno no Banco de Dados
    $aluno = LoginAlunoModel::create([
        'nome'            => $dadosTemp['nome'],
        'email'           => $dadosTemp['email'],
        'senha'           => $dadosTemp['senha'], // Gravando a senha com hash pré-gerado
        'area_cientifica' => $dadosTemp['area_cientifica']
    ]);

    // Limpa os dados temporários da sessão
    session()->forget(['cadastro_temporario', 'codigo_verificacao']);

    // Faz o login automático do Aluno real verificado
    Auth::guard('alunos')->login($aluno, true);

    return redirect()->route('alunologado.index')->with('sucesso', 'E-mail validado e conta criada com sucesso!');
}
    

    public function logout(Request $request) {
        Auth::guard('alunos')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginaluno.index');
    }

    public function remover(Request $dados) {  }
    public function atualizar(Request $dados) {  }
    public function consultar() {  }
}
