<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pessoas',[PessoaController::class, 'index'])->name('listagem');
Route::get('/pessoas/mostra/{id}',[PessoaController::class, 'show']);

Route::get('/pessoas/novo',[PessoaController::class, 'create'])->name('novo');
Route::post('/pessoas/adiciona',[PessoaController::class, 'store']);

Route::put('/pessoas/editar/{id}',[PessoaController::class, 'update'])->name('editar');
Route::get('/pessoas/alterar/{id}',[PessoaController::class, 'edit']);

Route::get('/produtos/remove/{id}',[PessoaController::class, 'destroy']);