<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cupons;

class CuponsController extends Controller
{
    public function criar()
    {
        return view('admin.cupom');
    }

    public function salvar(Request $request)
    {
        $validated = $request->validate([
        'cupom' => 'required',
        'desconto' => 'required|min:1|numeric',
        'quantidade' => 'required|min:1|numeric',
        'minimo' => 'required|min:1|numeric',
        'maximo' => 'required|numeric'
        ]);

        Cupons::create($validated);

        return redirect()->route('cupom.criar')->with('success', 'Cupom cadastrado com sucesso!');
    }
}
