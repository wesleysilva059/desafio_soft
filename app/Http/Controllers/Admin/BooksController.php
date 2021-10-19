<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\User;
use App\Services\BookServices;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('admin.books.index', compact('books'));
    }

    public function create()
    {
        $users = User::all()->pluck('name', 'id');

        return view('admin.books.create', compact('users'));
    }

    public function store(StoreBookRequest $request)
    {
        $dados = $request->all();
        $book = BookServices::CreateBook($dados);

        return redirect()->route('admin.books.index');
    }

    public function edit(Book $book)
    {

        return view('admin.books.edit', compact('book'));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $dados = $request->all();
        $book = BookServices::UpdateBook($dados, $book);

        return redirect()->route('admin.books.index');
    }

    public function show(Book $book)
    {

        return view('admin.books.show', compact('book'));
    }

    public function destroy(Book $book)
    {
        BookServices::DeleteBook($book);

        return back();
    }

}
