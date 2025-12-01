@extends('layouts.app')

@section('title', 'Lista de Categorias')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Categorias</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Nova Categoria</a>
</div>

@if($categories->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nome }}</td>
                    <td>{{ Str::limit($category->descricao, 50) }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" 
                                onclick="return confirm('Tem certeza que deseja excluir?')">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center">
        {{ $categories->links() }}
    </div>
@else
    <div class="alert alert-info">
        Nenhuma categoria encontrada.
    </div>
@endif
@endsection