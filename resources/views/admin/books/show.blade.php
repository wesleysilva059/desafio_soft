@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        Visualizar Livro
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.books.index') }}">
                Voltar a lista
            </a>
        </div>
        <table class="striped bordered show-table">
            <tbody>
                <tr>
                    <th>
                        Id
                    </th>
                    <td>
                        {{ $book->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Título
                    </th>
                    <td>
                        {{ $book->title }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Descrição
                    </th>
                    <td>
                        {{ $book->description }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Autor
                    </th>
                    <td>
                        {{ $book->author }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Numero de Página
                    </th>
                    <td>
                        {{ $book->number_page }}
                    </td>
                </tr>
                <tr>
                    <th>
                       Data do Cadastro
                    </th>
                    <td>
                        {{ $book->created_at->format('d/m/Y') }}
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.books.index') }}">
                Voltar a lista
            </a>
        </div>
    </div>
</div>
@endsection