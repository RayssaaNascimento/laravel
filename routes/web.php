<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\LoginAlunoController; // Importado para o código ficar mais limpo
use App\Http\Controllers\Principal;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Principal::class, 'principal']);

Route::prefix('/loginaluno')->group(function(){
    
    // Telas (Views)
    Route::get('/index', [LoginAlunoController::class, 'index'])->name('loginaluno.index');
    Route::get('/cadastro', [LoginAlunoController::class, 'cadastro'])->name('loginaluno.cadastro');
    Route::get('/alunologado', [LoginAlunoController::class, 'alunologado'])->name('loginaluno.alunologado');
    
    // Ações de Autenticação (Ajustado o nome da rota e apontando para o método logar)
    Route::post('/login', [LoginAlunoController::class, 'logar'])->name('loginaluno.autenticar');
    Route::post('/logout', [LoginAlunoController::class, 'logout'])->name('loginaluno.logout');

    // Ações do CRUD
    Route::post('/adicionar', [LoginAlunoController::class, 'adicionar'])->name('loginaluno.adicionar');
    Route::post('/remover', [LoginAlunoController::class, 'remover'])->name('loginaluno.remover');
    Route::post('/atualizar', [LoginAlunoController::class, 'atualizar'])->name('loginaluno.atualizar');
    Route::get('/consultar', [LoginAlunoController::class, 'consultar'])->name('loginaluno.consultar');

    Route::get('/verificar-codigo', [LoginAlunoController::class, 'telaCodigo'])->name('loginaluno.verificar_codigo');
    Route::post('/confirmar-codigo', [LoginAlunoController::class, 'confirmarCodigo'])->name('loginaluno.confirmar_codigo');

});


// Exemplo de página protegida: Só entra aqui o aluno que estiver logado e com a sessão salva
Route::middleware(['auth:alunos'])->group(function () {
    
    Route::get('/alunologado', function () {
        // Exemplo de como pegar os dados do aluno guardado na sessão:
        $aluno = Auth::guard('alunos')->user();
        return "Bem-vindo, " . $aluno->nome . "! Você está na área logada.";
    })->name('alunologado');

});
