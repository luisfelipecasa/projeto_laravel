<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index()
    {
        $carrinho = session()->get('carrinho', []);
        return view('carrinho.index', compact('carrinho'));
    }

    public function adicionar(Produto $produto)
    {
        session()->push('carrinho', $produto->attributesToArray());
        return redirect()->route('carrinho');
    }

    public function remover(Produto $produto)
    {

        $carrinho = session()->get('carrinho', []);

        $carrinho = array_filter($carrinho, function ($item) use ($produto) {
            return $item['id'] !== $produto->id;
        });

        session()->put('carrinho', $carrinho);

        return redirect()->route('carrinho');
    }
}
