<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//MUDAR TUDO
//cria uma rota para exibir todos os produtos
Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index');

// cria a rota para adicionar novo produto
Route::post('/produtos', [Produtos::class, 'create']);

//cria a rota para exibir um produto por id
Route::get('/produtos/{id}', 'App\Http\Controllers\ProdutoController@show');

//cria a rota para atualizar o produto por id
Route::put('/produtos/{id}', 'App\Http\Controllers\ProdutoController@update');

//cria a rota para deletar um produto por id
Route::delete('/produtos/{id}', 'App\Http\Controllers\ProdutoController@destroy');
