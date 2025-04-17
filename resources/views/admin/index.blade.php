@extends('layouts.admin-master')

@section('content')
<div class="container-fluid mt-4">
    <h2 class="mb-4">Painel de Administração</h2>

    <div class="row">
        <!-- Visitas últimos 7d -->
        <div class="col-md-3 mb-4">
            <div class="card bg-primary text-white h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-bar-chart-fill me-2"></i>Visitas (7d)</h5>
                    <h3 class="mt-2">12.345</h3>
                </div>
            </div>
        </div>

        <!-- Receita últimos 7d -->
        <div class="col-md-3 mb-4">
            <div class="card bg-success text-white h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-currency-dollar me-2"></i>Receita (7d)</h5>
                    <h3 class="mt-2">R$ 8.900,00</h3>
                </div>
            </div>
        </div>

        <!-- Lucro últimos 7d -->
        <div class="col-md-3 mb-4">
            <div class="card bg-warning text-dark h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-graph-up-arrow me-2"></i>Lucro (7d)</h5>
                    <h3 class="mt-2">R$ 5.600,00</h3>
                </div>
            </div>
        </div>

        <!-- Total de usuários -->
        <div class="col-md-3 mb-4">
            <div class="card bg-info text-white h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="bi bi-people-fill me-2"></i>Usuários</h5>
                    <h3 class="mt-2">1.234</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Aqui você pode adicionar gráficos, tabelas ou seções adicionais -->
</div>
@endsection
