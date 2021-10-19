@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        Novo Livro
    </div>

    <form method="POST" action="{{ route('admin.books.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="body">
            <div class="mb-3">
                <label for="title" class="text-xs required">Título</label>
                <div class="form-group">
                    <input type="text" id="title" name="title" class="{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" required>
                </div>
                @if($errors->has('title'))
                    <p class="invalid-feedback">{{ $errors->first('title') }}</p>
                @endif
                <span class="block"></span>
            </div>
            <div class="mb-3">
                <label for="description" class="text-xs required">Descrição</label>
                <div class="form-group">
                    <input type="text" id="description" name="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description') }}" required>
                </div>
                @if($errors->has('description'))
                    <p class="invalid-feedback">{{ $errors->first('description') }}</p>
                @endif
                <span class="block"></span>
            </div>
            <div class="mb-3">
                <label for="author" class="text-xs required">Autor</label>
                <div class="form-group">
                    <input type="text" id="author" name="author" class="{{ $errors->has('author') ? ' is-invalid' : '' }}" value="{{ old('author') }}" required>
                </div>
                @if($errors->has('author'))
                    <p class="invalid-feedback">{{ $errors->first('author') }}</p>
                @endif
                <span class="block"></span>
            </div>
            <div class="mb-3">
                <label for="number_page" class="text-xs required">Quantidade de Paginas</label>
                <div class="form-group">
                    <input type="number" id="number_page" name="number_page" class="{{ $errors->has('number_page') ? ' is-invalid' : '' }}" value="{{ old('number_page') }}" required>
                </div>
                @if($errors->has('number_page'))
                    <p class="invalid-feedback">{{ $errors->first('number_page') }}</p>
                @endif
                <span class="block"></span>
            </div>
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">Salvar</button>
        </div>
    </form>
</div>
@endsection