@extends('layouts.admin')
@section('content')
    <div class="block my-4">
        <a class="btn-md btn-green" href="{{ route('admin.books.create') }}">
            Adicionar Livro
        </a>
    </div>
<div class="main-card">
    <div class="header">
        Lista de Livros
    </div>

    <div class="body">
        <div class="w-full">
            <table class="stripe hover bordered datatable datatable-Project">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Título
                        </th>
                        <th>
                            Autor
                        </th>
                        <th>
                            Paginas
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $key => $book)
                        <tr>
                            <td>
                                {{ $book->id ?? '' }}
                            </td>
                            <td>
                                {{ $book->title ?? '' }}
                            </td>
                            <td>
                                {{ $book->author ?? '' }}
                            </td>
                            <td>
                                {{ $book->number_page ?? '' }}
                            </td>
                            <td>
                                <a class="btn-sm btn-indigo" href="{{ route('admin.books.show', $book->id) }}">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <a class="btn-sm btn-blue" href="{{ route('admin.books.edit', $book->id) }}">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>

                                <form action="{{ route('admin.books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Você tem certeza que deseja excluir?');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn-sm btn-red"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>


                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {

  let table = $('.datatable-Project:not(.ajaxTable)').DataTable();
  
})

</script>
@endsection