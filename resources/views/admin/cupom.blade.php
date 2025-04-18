@extends('layouts.admin-master')


@section('content')
<div class="container mt-4">
    <h2>Adicionar Cupom</h2>

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

    <form action="{{ route('cupom.salvar') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="cupom" class="form-label">Código do cupom</label>
            <input type="text" class="form-control" name="cupom" id="cupom" required>
        </div>

        <div class="mb-3">
            <label for="desconto" class="form-label">Desconto %</label>
            <input type="text" class="form-control" name="desconto" id="desconto"required>
        </div>

        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="text" class="form-control" name="quantidade" id="quantidade"required>
        </div>

        <div class="mb-3">
            <label for="minimo" class="form-label">Mínimo</label>
            <input type="text" class="form-control" name="minimo" id="minimo"required>
        </div>

        <div class="mb-3">
            <label for="maximo" class="form-label">Máximo</label>
            <input type="text" class="form-control" name="maximo" id="maximo"required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Cupom</button>
    </form>
</div>
@endsection
