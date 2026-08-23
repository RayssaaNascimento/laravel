<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\LoginAlunoController; 
use App\Http\Controllers\LoginProfessorController; 
use App\Http\Controllers\Principal;
use App\Http\Controllers\Inicio;
use App\Http\Controllers\Fp;
use App\Http\Controllers\Entrar;
use App\Http\Controllers\Aluno;
use App\Http\Controllers\Professor;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [Principal::class, 'principal']);
Route::get('/inicio', [Inicio::class, 'inicio'])->name('inicio');
Route::get('/fp', [Fp::class, 'fp'])->name('fp');
Route::get('/entrar', [Entrar::class, 'entrar'])->name('entrar');

// ==========================================
// ROTAS DO ALUNO
// ==========================================
Route::get('/aluno', [Aluno::class, 'aluno'])->name('aluno');
Route::get('/loginaluno', [LoginAlunoController::class, 'loginaluno'])->name('loginaluno');
Route::get('/cadastroaluno', [LoginAlunoController::class, 'cadastroaluno'])->name('cadastroaluno');

// Autenticação e Fluxo de Cadastro do Aluno
Route::post('/login-aluno/logar', [LoginAlunoController::class, 'logar'])->name('loginaluno.logar'); // Mudado de /login para /login-aluno
Route::post('/login-aluno/logout', [LoginAlunoController::class, 'logout'])->name('loginaluno.logout');
Route::post('/login-aluno/adicionar', [LoginAlunoController::class, 'adicionar'])->name('loginaluno.adicionar'); // CORRIGIDO: Adicionado o ponto!

// Verificação de Código do Aluno
Route::get('/login-aluno/verificar-codigo', [LoginAlunoController::class, 'telaCodigo'])->name('loginaluno.verificar_codigo');
Route::post('/login-aluno/confirmar-codigo', [LoginAlunoController::class, 'confirmarCodigo'])->name('loginaluno.confirmar_codigo');
Route::post('/login-aluno/reenviar-codigo', [LoginAlunoController::class, 'reenviarCodigo'])->name('loginaluno.reenviar_codigo');

// CRUD Aluno
Route::post('/remover', [LoginAlunoController::class, 'remover'])->name('loginaluno.remover');
Route::post('/atualizar', [LoginAlunoController::class, 'atualizar'])->name('loginaluno.atualizar');
Route::get('/consultar', [LoginAlunoController::class, 'consultar'])->name('loginaluno.consultar');


// ==========================================
// ROTAS DO PROFESSOR
// ==========================================
Route::get('/professor', [Professor::class, 'professor'])->name('professor');
Route::get('/loginprofessor', [LoginProfessorController::class, 'loginprofessor'])->name('loginprofessor');
Route::get('/cadastroprofessor', [LoginProfessorController::class, 'cadastroprofessor'])->name('cadastroprofessor');

// Autenticação e Fluxo de Cadastro do Professor
Route::post('/logar', [LoginProfessorController::class, 'logar'])->name('logar'); // Mudado de /login para /login-professor
Route::post('/logout', [LoginProfessorController::class, 'logout'])->name('loginprofessor.logout');
Route::post('/professor/adicionar', [LoginProfessorController::class, 'adicionar'])->name('adicionar');

// Verificação de Código do Aluno
Route::get('/verificar-codigo', [LoginProfessorController::class, 'telaCodigo'])->name('verificar_codigo');
Route::post('/confirmar-codigo', [LoginProfessorController::class, 'confirmarCodigo'])->name('confirmar_codigo');
Route::post('/reenviar-codigo', [LoginProfessorController::class, 'reenviarCodigo'])->name('reenviar_codigo');

// CRUD Professor
Route::post('/professor/remover', [LoginProfessorController::class, 'remover'])->name('loginprofessor.remover');
Route::post('/professor/atualizar', [LoginProfessorController::class, 'atualizar'])->name('loginprofessor.atualizar');
Route::get('/professor/consultar', [LoginProfessorController::class, 'consultar'])->name('loginprofessor.consultar');
