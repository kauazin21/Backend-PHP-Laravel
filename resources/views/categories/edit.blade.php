@extends('layouts.app')

@section('title', 'Editar Categoria')

@section('content')
<div class="card">
    <div class="card-header">
        <h2>Editar Categoria</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nome" class="form-label">Nome *</label>
                <input type="text" class="form-control @error('nome') is-invalid @enderror" 
                    id="nome" name="nome" value="{{ old('nome', $category->nome) }}" required>
                @error('nome')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control @error('descricao') is-invalid @enderror" 
                    id="descricao" name="descricao" rows="3">{{ old('descricao', $category->descricao) }}</textarea>
                @error('descricao')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection