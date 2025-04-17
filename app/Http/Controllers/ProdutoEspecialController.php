<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoEspecial;

class ProdutoEspecialController extends Controller
{
    public function index()
{
    $columns = [
        'baratas_dividas' => ['title' => 'Baratas com Dívidas', 'class' => 'kanban-red'],
        'baratas_sem_dividas' => ['title' => 'Baratas sem Dívidas', 'class' => 'kanban-yellow'],
        'parrudas_dividas' => ['title' => 'Parrudas com Dívidas', 'class' => 'kanban-blue'],
        'parrudas_sem_dividas' => ['title' => 'Parrudas sem Dívida', 'class' => 'kanban-green'],
        'vendidas' => ['title' => 'Vendidas', 'class' => 'kanban-gray'],
    ];

    // Get tasks grouped by column name
    $tasks = ProdutoEspecial::all()->groupBy('coluna');

    return view('quadro.index', compact('columns', 'tasks'));
}

public function criar()
    {
        return view('produtos.criar');
    }

    public function salvar(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'coluna' => 'required|string|max:255',
            'gasto' => 'required|numeric',
            'preco' => 'required|numeric',
        ]);

        ProdutoEspecial::create($validated);

        return redirect()->route('produtos')->with('success', 'Produto criado com sucesso!');
    }
}

