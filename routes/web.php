<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'index'])->name('pagina-principal');
Route::get('/sobre', [App\Http\Controllers\Principal::class, 'sobre'])->name('pagina-sobre');
Route::get('/cursos', [App\Http\Controllers\Principal::class, 'cursos'])->name('pagina-cursos');
Route::get('/contato', [App\Http\Controllers\Principal::class, 'contato'])->name('pagina-contato');




