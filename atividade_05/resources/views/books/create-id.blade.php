@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Adicionar Livro informando IDs</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('books.store.id') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ID do Autor</label>
            <input type="number" name="author_id" class="form-control" value="{{ old('author_id') }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ID da Editora</label>
            <input type="number" name="publisher_id" class="form-control" value="{{ old('publisher_id') }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">ID da Categoria</label>
            <input type="number" name="category_id" class="form-control" value="{{ old('category_id') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection