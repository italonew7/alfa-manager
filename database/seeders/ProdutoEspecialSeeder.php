<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProdutoEspecial;

class ProdutoEspecialSeeder extends Seeder
{
    public function run()
    {
        ProdutoEspecial::create([
            'nome' => 'BM Teste A',
            'descricao' => 'Barata com dívida alta',
            'coluna' => 'baratas_dividas',
            'gasto' => 120.00,
            'preco' => 199.99,
        ]);

        ProdutoEspecial::create([
            'nome' => 'BM Teste B',
            'descricao' => 'Parruda sem dívida',
            'coluna' => 'parrudas_sem_dividas',
            'gasto' => 150.00,
            'preco' => 300.00,
        ]);
    }
}
