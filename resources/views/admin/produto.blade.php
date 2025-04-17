@extends('layouts.admin-master')


@section('content')
<div class="container mt-4">
    <h2>Adicionar Produto Especial</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.salvar') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" name="descricao" id="descricao" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="coluna" class="form-label">Coluna</label>
            <select class="form-select" id="coluna" name="coluna" required>
                <option value="">Selecione uma coluna</option>
                <option value="baratas_dividas">Baratas com Dívidas</option>
                <option value="baratas_sem_dividas">Baratas sem Dívidas</option>
                <option value="parrudas_dividas">Parrudas com Dívidas</option>
                <option value="parrudas_sem_dividas">Parrudas sem Dívida</option>
                <option value="vendidas">Vendidas</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="gasto" class="form-label">Gasto</label>
            <input type="number" step="0.01" class="form-control" name="gasto" id="gasto" required>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" step="0.01" class="form-control" name="preco" id="preco" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Produto</button>
    </form>
</div>
@endsection
