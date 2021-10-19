<?php

namespace Tests\Unit;

use App\Models\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{
    /**
     * @test
     */

     public function check_if_book_columns_is_correct(){
         $book = new Book();

         $expected = [
             'title',
             'description',
             'author',
             'number_page'
         ];

         $arrayCompared = array_diff($expected, $book->getFillable());

         $this->assertEquals(0, count($arrayCompared));
     }
}
