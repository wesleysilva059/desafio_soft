<?php

namespace App\Services;

use App\Models\Book;

class BookServices {

   public static function CreateBook($dados){
      
      $book = Book::create($dados);

      return $book;
   }

   public static function UpdateBook($dados, $book){
      
      $book = $book->update($dados);

      return $book;
   }

   public static function DeleteBook($book){
      $book->delete();
   }
}

