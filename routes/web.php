<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\Login;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal']);
//Route::get('/login', [App\Http\Controllers\Login::class, 'login']);

Route::post('/login', [App\Http\Controllers\Login::class, 'login'])->name('login');
Route::get('/login', function () {
    return view('authlogin');
})->name('login.form');
Route::get('/register', fn() => view('auth.register'))->name('register.form');




