<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Produto::all();
        
        return response()->json($produto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $produto = new Produto();
        $produto->id = $request->input('id');
        $produto->nome = $request->input('nome');
        $produto->tipo = $request->input('tipo');
        $produto->preco_custo = $request->input('preco_custo');
        $produto->preco_venda = $request->input('preco_venda');
        $produto->lote = $request->input('lote');
        $produto->data_aquisicao = $request->input('data_aquisicao');
        $produto->data_venda = $request->input('data_venda');
        $produto->fornecedor = $request->input('fornecedor');
        $produto->validade = $request->input('validade');  

        $produto->save();

        return response()->json($produto);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $produto = Produto::find($id);
        if(!$produto){
            return response()->json([
                'message'   => 'Produto não encontrado',
            ], 404);
        }

        return response()->json($produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        $findProduto = Produto::find($id);
        if(!$findProduto){
            return response()->json([
                'message'   => 'Produto não encontrado',
            ], 404);
        } else {
            $findProduto->id = $request->input('id');
            $findProduto->nome = $request->input('nome');
            $findProduto->tipo = $request->input('tipo');
            $findProduto->preco_custo = $request->input('preco_custo');
            $findProduto->preco_venda = $request->input('preco_venda');
            $findProduto->data_aquisicao = $request->input('data_aquisicao');
            $findProduto->data_venda = $request->input('data_venda');
            $findProduto->fornecedor = $request->input('fornecedor');
            $findProduto->validade = $request->input('validade');
            $findProduto->lote = $request->input('lote');

            $findProduto->save();
        }

        return response()->json($findProduto);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $findProduto = Produto::find($id);
        if(!$findProduto){
            return response()->json([
                'message'   => 'Produto não encontrado',
            ], 404);
        } else {
            $findProduto->delete();
        }
    }
}
