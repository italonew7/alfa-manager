{{-- resources/views/kanban/index.blade.php --}}

@extends('layouts.auth-master')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .kanban-board {
        display: flex;
        gap: 1rem;
        overflow-x: auto;
        padding-bottom: 1rem;
    }

    .kanban-column {
        flex: 1;
        min-width: 280px;
        max-height: 85vh;
        display: flex;
        flex-direction: column;
        border-radius: 0.5rem;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .kanban-column .card-header {
        color: #fff;
        font-weight: bold;
        text-align: center;
    }

    .kanban-red .card-header { background-color: #dc3545; }
    .kanban-yellow .card-header { background-color: #ffc107; }
    .kanban-blue .card-header { background-color: #0d6efd; }
    .kanban-green .card-header { background-color: #198754; }
    .kanban-gray .card-header { background-color: #6c757d; }

    .kanban-column .card-body {
        overflow-y: auto;
        flex-grow: 1;
        background-color: #f8f9fa;
    }

    .list-group-item {
        margin-bottom: 0.5rem;
        border-radius: 0.5rem;
        cursor: grab;
    }

    .list-group-item strong {
        font-size: 1rem;
        display: block;
        margin-bottom: 0.25rem;
    }

    .list-group-item:active {
        cursor: grabbing;
    }
</style>

<!-- Banner -->
<div style="width: 100%; height: 200px; background: url('https://img.notionusercontent.com/s3/prod-files-secure%2F7ec9d2ef-be7b-4111-830e-4f2317b99e46%2F2a068485-7493-4a20-b823-36df35ac38a3%2Flogo_nova_fundo_preto.png/size/w=2000?exp=1744929530&sig=Le_v4qL6KjuaSOtI03RZ4Tz8RJYvI6XSHarltEWiNM4&id=162c4d9d-0827-8145-8390-000bc36ebdd5&table=collection') center/cover no-repeat; display: flex; align-items: center; justify-content: center;">
    <h1 style="color: white; text-shadow: 1px 1px 5px rgba(0,0,0,0.7); font-size: 2.5rem;">Bem-vindo ao Painel Kanban</h1>
</div>

<!-- Title and Description -->
<div class="text-center my-4">
    <h2 class="fw-bold">BMs Alfa Manager Contingência</h2>
    <p class="text-muted">Ativos de alta qualidade e suporte diferenciado você encontra aqui.<br>
    <br>Aceitamos pagamentos via PIX<br>
    <br>Instagram: @alfamanagerBR</p>
</div>


<div class="container">
    <h2 class="mb-4">BM's com dividas</h2>

    <div class="kanban-board">
    @foreach ($columns as $key => $column)
        <div class="kanban-column card {{ $column['class'] }}">
            <div class="card-header">{{ $column['title'] }}</div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($tasks[$key] ?? [] as $task)
                        <li class="list-group-item" draggable="true">
                            <strong>{{ $task->nome }}</strong><br>
                            <small class="text-muted">{{ $task->descricao }}</small><br>
                            <span class="badge bg-secondary mt-1">Gasto: R$ {{ number_format($task->gasto, 2, ',', '.') }}</span>
                            <span class="badge bg-primary mt-1">Preço: R$ {{ number_format($task->preco, 2, ',', '.') }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let draggedItem = null;

        document.querySelectorAll('.list-group-item').forEach(item => {
            item.addEventListener('dragstart', function (e) {
                draggedItem = item;
                setTimeout(() => {
                    item.style.display = 'none';
                }, 0);
            });

            item.addEventListener('dragend', function (e) {
                setTimeout(() => {
                    item.style.display = 'block';
                    draggedItem = null;
                }, 0);
            });
        });

        document.querySelectorAll('.card-body').forEach(cardBody => {
            cardBody.addEventListener('dragover', function (e) {
                e.preventDefault();
            });

            cardBody.addEventListener('drop', function (e) {
                e.preventDefault();
                if (draggedItem) {
                    cardBody.querySelector('ul').appendChild(draggedItem);
                }
            });
        });
    });
</script>

@endsection
