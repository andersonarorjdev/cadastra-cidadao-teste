<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
  CadastrosController
};

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

//Listar
Route::get('/', [CadastrosController::class, 'index']);

//Redireciona para a page de cadastros
Route::get('/cadastrar', [CadastrosController::class, 'cadastrar']);

//Cadastrar
Route::post('/cadastrar', [CadastrosController::class, 'store']);

//Deletar
Route::delete('/{id}', [CadastrosController::class, 'destroy']);

//Retorna para a view de editar
Route::get('/edit/{id}', [CadastrosController::class, 'edit']);

//Atualizar
Route::put('/cadastrar/update/{id}', [CadastrosController::class, 'update']);

