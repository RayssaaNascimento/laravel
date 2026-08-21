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

Route::get('/inicio', [App\Http\Controllers\Inicio::class, 'inicio'])->name('inicio');

Route::get('/fp', [App\Http\Controllers\Fp::class, 'fp'])->name('fp');

Route::get('/entrar', [App\Http\Controllers\Entrar::class, 'entrar'])->name('entrar');

// ALUNO

Route::get('/aluno', [App\Http\Controllers\Aluno::class, 'aluno'])->name('aluno');


Route::get('/loginA', [LoginAlunoController::class, 'loginA'])->name('loginaluno');

Route::get('/cadastroA', [LoginAlunoController::class, 'cadastroA'])->name('cadastroaluno');

Route::post('/login-aluno/reenviar-codigo', [LoginAlunoController::class, 'reenviarCodigo'])->name('loginaluno.reenviar_codigo');

Route::post('/login', [LoginAlunoController::class, 'logar'])->name('loginaluno.autenticar');

Route::post('/logout', [LoginAlunoController::class, 'logout'])->name('loginaluno.logout');

Route::post('/adicionar', [LoginAlunoController::class, 'adicionar'])->name('loginaluno.adicionar');
Route::post('/remover', [LoginAlunoController::class, 'remover'])->name('loginaluno.remover');
Route::post('/atualizar', [LoginAlunoController::class, 'atualizar'])->name('loginaluno.atualizar');
Route::get('/consultar', [LoginAlunoController::class, 'consultar'])->name('loginaluno.consultar');

Route::get('/verificar-codigo', [LoginAlunoController::class, 'telaCodigo'])->name('loginaluno.verificar_codigo');
Route::post('/confirmar-codigo', [LoginAlunoController::class, 'confirmarCodigo'])->name('loginaluno.confirmar_codigo');



// PROFESSOR

Route::get('/professor', [App\Http\Controllers\Professor::class, 'professor'])->name('professor');
Route::get('/loginP', [LoginProfessorController::class, 'loginP'])->name('loginprofessor');

Route::get('/cadastroP', [LoginProfessorController::class, 'cadastroP'])->name('cadastroprofessor');

Route::post('/login-professor/reenviar-codigo', [LoginProfessorController::class, 'reenviarCodigo'])->name('loginprofessor.reenviar_codigo');

Route::post('/login', [LoginProfessorController::class, 'logar'])->name('loginprofessor.autenticar');

Route::post('/logout', [LoginProfessorController::class, 'logout'])->name('loginprofessor.logout');

Route::post('/adicionar', [LoginProfessorController::class, 'adicionar'])->name('loginprofessor.adicionar');
Route::post('/remover', [LoginProfessorController::class, 'remover'])->name('loginprofessor.remover');
Route::post('/atualizar', [LoginProfessorController::class, 'atualizar'])->name('loginprofessor.atualizar');
Route::get('/consultar', [LoginProfessorController::class, 'consultar'])->name('loginprofessor.consultar');

Route::get('/verificar-codigo', [LoginProfessorController::class, 'telaCodigo'])->name('loginprofessor.verificar_codigo');
Route::post('/confirmar-codigo', [LoginProfessorController::class, 'confirmarCodigo'])->name('loginprofessor.confirmar_codigo');

// Route::prefix('/loginaluno')->group(function(){
    
//     // Telas (Views)
//     // Route::get('/alunologado', [LoginAlunoController::class, 'alunologado'])->name('loginaluno.alunologado');
    
//     // Ações de Autenticação (Ajustado o nome da rota e apontando para o método logar)

// });


// Exemplo de página protegida: Só entra aqui o aluno que estiver logado e com a sessão salva
// Route::middleware(['auth:alunos'])->group(function () {
    
//     Route::get('/aluno', function () {
//         // Exemplo de como pegar os dados do aluno guardado na sessão:
//         $aluno = Auth::guard('alunos')->user();
//         return "Bem-vindo, " . $aluno->nome . "! Você está na área logada.";
//     })->name('alunol');

// });
