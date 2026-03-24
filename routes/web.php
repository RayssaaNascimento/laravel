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
Route::get('/login', [App\Http\Controllers\Principal::class, 'login'])->name('pagina-login');
Route::get('/conteudos', [App\Http\Controllers\Principal::class, 'conteudos'])->name('pagina-conteudos');
Route::get('/contato', [App\Http\Controllers\Principal::class, 'contato'])->name('pagina-contato');




