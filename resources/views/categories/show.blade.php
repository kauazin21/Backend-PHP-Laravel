@extends('layouts.app')

@section('title', 'Detalhes da Categoria')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Detalhes da Categoria</h2>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>ID:</strong>
                {{ $category->id }}
            </div>
            <div class="mb-3">
                <strong>Nome:</strong>
                {{ $category->nome }}
            </div>
            <div class="mb-3">
                <strong>Descrição:</strong>
                {{ $category->descricao ?? 'N/A' }}
            </div>
            <div class="mb-3">
                <strong>Criado em:</strong>
                {{ $category->created_at->format('d/m/Y H:i:s') }}
            </div>
            <div class="mb-3">
                <strong>Atualizado em:</strong>
                {{ $category->updated_at->format('d/m/Y H:i:s') }}
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Editar</a>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
        </div>
    </div>
@endsection