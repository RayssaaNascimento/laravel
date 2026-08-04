<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginAlunoModel; // Certifique-se de que o Model correto está mapeado (geralmente mapeia a tabela 'alunos')
// Se o seu model da tabela de alunos for outro, troque a linha abaixo pelo model correto, ex: use App\Models\Aluno;
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

    // 1. Valida e envia o e-mail guardando dados na sessão
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
        $codigo = rand(100000, 999999);

        // Guarda temporariamente os dados do formulário e o código na SESSÃO
        session([
            'cadastro_temporario' => [
                'nome'            => $request->nome,
                'email'           => $request->email,
                'senha'           => Hash::make($request->senha),
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

    // 3. Valida o código e CRIA a conta definitiva salvando no banco
    public function confirmarCodigo(Request $request) {
        $request->validate([
            'codigo_digitado' => 'required|numeric|digits:6',
        ]);

        $codigoCorreto = session('codigo_verificacao');
        $dadosAluno = session('cadastro_temporario'); // CORRIGIDO: Buscando a chave certa da sessão

        if (!$dadosAluno) {
            return redirect()->route('loginaluno.cadastro')->withErrors(['error' => 'Sessão expirada. Tente o cadastro novamente.']);
        }

        // Verifica se o código bate
        if ($request->codigo_digitado == $codigoCorreto) {
            
            // ---- CÓDIGO CERTO ----
            
            // Grava o aluno definitivamente no banco usando seu Model
            // IMPORTANTE: Ajuste os campos abaixo de acordo com as colunas da sua tabela 'alunos'
            $aluno = LoginAlunoModel::create([
                'nome'            => $dadosAluno['nome'],
                'email'           => $dadosAluno['email'],
                'senha'           => $dadosAluno['senha'], // Já está com o Hash
                'area_cientifica' => $dadosAluno['area_cientifica'],
            ]);
            
            // Limpa as sessões temporárias
            session()->forget(['codigo_verificacao', 'cadastro_temporario']);

            // Faz o login automático do Aluno real recém-criado no Guard correto
            Auth::guard('alunos')->login($aluno, true);

            // Redireciona para a página interna/logada do aluno
            return redirect()->route('loginaluno.alunologado')->with('success', 'E-mail verificado com sucesso! Bem-vindo(a).');
        }

        // ---- CÓDIGO ERRADO ----
        return redirect()->back()->withErrors(['codigo_digitado' => 'O código de verificação digitado está incorreto.']);
    }

    // 4. Método de Reenvio Corrigido
    public function reenviarCodigo(Request $request)
    {
        // CORRIGIDO: Recupera o e-mail de dentro da estrutura correta na sessão
        $dadosAluno = session('cadastro_temporario');
        $email = $dadosAluno['email'] ?? null; 

        if (!$email) {
            return redirect()->back()->withErrors(['error' => 'Não encontramos seus dados de cadastro. Tente reiniciar o cadastro.']);
        }

        // Gera um novo código aleatório de 6 dígitos
        $novoCodigo = rand(100000, 999999);

        // Atualiza apenas o código de verificação na sessão
        session(['codigo_verificacao' => $novoCodigo]);

        try {
            // Dispara o e-mail real com o novo código
            Mail::to($email)->send(new CodigoVerificacaoMail($novoCodigo));
            
            return redirect()->back()->with('status', 'Um novo código de 6 dígitos foi enviado para o seu e-mail!');
            
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Não foi possível reenviar o e-mail. Verifique suas configurações de servidor de e-mail.']);
        }
    } // CORRIGIDO: Chave de fechamento reposicionada corretamente aqui
    

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
