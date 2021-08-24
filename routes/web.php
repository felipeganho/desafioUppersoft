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

Route::get('/',[PessoaController::class, 'index'])->name('listagem');

Route::prefix('pessoas')->group(function () {
    Route::get('/mostra/{id}',[PessoaController::class, 'show']);
    Route::get('/novo',[PessoaController::class, 'create'])->name('novo');
    Route::post('/adiciona',[PessoaController::class, 'store']);
    Route::put('/editar/{id}',[PessoaController::class, 'update'])->name('editar');
    Route::get('/alterar/{id}',[PessoaController::class, 'edit']);
    Route::get('/remove/{id}',[PessoaController::class, 'destroy'])->name('excluir');
});



