<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Lista todos os produtos cadastrados.
     */
    public function index()
    {
        $produtos = Produto::all(); //"Select * from produtos"

        return view('produtos.index')->with('produtos', $produtos); //Retorna a view index com os produtos na variavel $produtos.
    }

    /**
     * Redireciona para a view do formulário de cadastro de produto.
     */
    public function create(Request $request)
    {
        return view('produtos.create');
    }

    /**
     * Armazena novo produto do formulário no DB.
     */
    public function store(Request $request)
    {
        $produto = new Produto();

        $validated = $request->validate([
            'nome' => 'required|max:100',
            'descricao' => 'nullable|max:255',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer|max:100',
        ]);


        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->quantidade = $request->quantidade;

        $produto->save(); //"Insert into produtos (nome, descricao, preco, quantidade) values ($nome, $descricao, $preco, $quantidade)"

        return to_route('produtos.index');
    }

    /**
     * Exibe os detalhes de um produto especifico.
     */
    public function show(string $id)
    {

        $produto = Produto::find($id); //"Select * from produtos where id = $id"

        return view('produtos.show')->with('produto', $produto); //Retorna a view show com o produto na variavel $produto.
    }

    /**
     * Deleta um produto especifico do DB.
     */
    public function destroy(string $id)
    {
        $produto = Produto::find($id); //"Select * from produtos where id = $id"

        $produto->delete(); //"Delete from produtos where id = $id"

        return to_route('produtos.index');
    }
}
